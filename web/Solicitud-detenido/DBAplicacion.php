  <?php

/* ini_set('display_errors', 1);
  error_reporting(E_ALL); */
require './DBConfig.php';

function dbObtenerEmpresas() {

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $json = array();
    try {
        foreach ($db->query('SELECT id, razonsocial FROM Empresa where id=6;') as $row) {
            $json[] = array(
                'id' => $row['id'],
                'reg' => $row['razonsocial']
            );
        }
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());
    }
    $db = null;
    return json_encode($json);
}

function dbObtenerAerolineas() {

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $json = array();
    try {
        foreach ($db->query('SELECT id, nombre FROM Aerolinea;') as $row) {
            $json[] = array(
                'id' => $row['id'],
                'reg' => $row['nombre']
            );
        }
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());
    }
    $db = null;
    return json_encode($json);
}

function dbObtenerAgenciaxRUC($ruc, $idEmpresa) {

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $json = array();
    if (empty($ruc)) {
        return json_encode($json);
    }
    try {
        $query = 'SELECT id,nombre FROM Agencia a join empresa_agencia ea on a.id = ea.agencia where ruc = :ruc and ea.empresa = :empresa';
        $sth = $db->prepare($query);
        $sth->execute(array(':ruc' => $ruc, ':empresa' => $idEmpresa));
        $resultado = $sth->fetchAll();
        if (!count($resultado) > 0) {
            $json['error'] = 40;
        }
        foreach ($resultado as $value) {
            $json['nombre'] = $value['nombre'];
            $json['id'] = $value['id'];
            $json['error'] = 0;
        }
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());
    }
    $sht = null;
    $db = null;
    return json_encode($json);
}

function dbValidarAgente($usuario, $idEmpresa, $pwd) {

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $json = array();
    $json['times'] = $GLOBALS['auth_MaxIntentos'];
    if (empty($idEmpresa)) {
        return json_encode($json);
    }
    try {                
        $_usuarioSession = strtolower($usuario);
        if (!isset($_SESSION[$_usuarioSession])) {
            $_SESSION[$_usuarioSession] = 0;
        }
        $userRetryTimes = $_SESSION[$_usuarioSession];        
        $lock = fnCheckLock($usuario);
        if ($lock === TRUE) {
            $json['error'] = 44;
            $_SESSION[$_usuarioSession] = 0;
            return json_encode($json);
        }
        $respuesta = curlAutenticarUsuario($usuario,$pwd);
        if (strtolower($respuesta['respuesta'])=='ok') {            
            $_SESSION[$_usuarioSession]=0;    
        }  else {
            $userRetryTimes+=1;
            $json['error'] = 41;            
            $_SESSION[$_usuarioSession]=$userRetryTimes; 
            if ($userRetryTimes >= $GLOBALS['auth_MaxIntentos']) {                
                fnLockUser($usuario);            
                $_SESSION[$_usuarioSession] = 0;
                $json['error'] = 44;
            }            
            return json_encode($json);
        }                       
       
        
        //Primero se obtiene la informmacion dle agente
        $query = 'SELECT u.id,u.nombre, apellidos,u.email,u.telefono,u.celular , ag.id as idAG,ag.ruc,ag.nombre as nombreAgencia FROM fos_user u join Agente a on u.id = a.id join Agencia ag on a.agencia = ag.id join empresa_agencia ea on ea.agencia = a.agencia where username = :username and ea.empresa = :empresa and locked = 0 and enabled = 1;';
        $sth = $db->prepare($query);
        $sth->execute(array(':username' => $usuario, ':empresa' => $idEmpresa,));
        $resultado = $sth->fetchAll();
        if (!count($resultado) > 0) {
            $json['error'] = 41;
        }
        foreach ($resultado as $value) {
            $json['id'] = $value['id'];
            $json['nombre'] = $value['nombre'];
            $json['apellidos'] = $value['apellidos'];
            $json['email'] = $value['email'];
            $json['telefono'] = $value['telefono'];
            $json['celular'] = $value['celular'];
            $json['idAG'] = $value['idAG'];
            $json['ruc'] = $value['ruc'];
            $json['nombreAgencia'] = $value['nombreAgencia'];
            $json['error'] = 0;
        }
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());
    }
    $sht = null;
    $db = null;
    return json_encode($json);
}

function dbObtenerCiudades() {

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $json = array();
    try {
        foreach ($db->query('SELECT id, descripcion FROM Ciudad WHERE id in (1,2);') as $row) {
            $json[] = array(
                'id' => $row['id'],
                'reg' => $row['descripcion']
            );
        }
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());
    }
    $db = null;
    return json_encode($json);
}

function dbObtenerCiudad($id) {

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $descCiudad = '';
    try {
        foreach ($db->query('SELECT descripcion FROM Ciudad where id ='.$id.';') as $row) {
            $descCiudad =  $row['descripcion'];            
        }
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());
    }
    $db = null;
    return $descCiudad;
}

function dbAlmacenarSolicitudOrden($post, $files, $numeroOrden) {
    try {
        $prioridadCalculada = fnCalcularPrioridad($post);
        $idGDS = fnConsultarGDS($post);
        $infoAdjunto = fnGuardarArchivo($files, $numeroOrden);
        $nombreAdjunto = $infoAdjunto['fileName'];
        $idOrden = fnGuardarOrden($post, $numeroOrden, $nombreAdjunto, $prioridadCalculada, $idGDS);
        fnInsertarDatosEmision($post, $idOrden);
        fnInsertarPagoDirecto($post, $idOrden);
        fnInsertarDepositoEfectivo($post, $idOrden);
        fnInsertarTransferenciaBancaria($post, $idOrden);
        fnInsertarTarjetaCredito($post, $idOrden);
        fnEscribirLogErrores('Orden Generada '.$numeroOrden.' idOrden '.$idOrden);     
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());                
    }
    $debug = var_export($post, true);
    fnEscribirLogErrores($debug);
    return $infoAdjunto['target'];
}

function fnGuardarOrden($post, $numeroOrden, $nombreAdjunto, $prioridadCalculada, $idGDS) {

    $idAgente = filtrarPost($post,'hdnIdAgente');
    $tipoServicio = strtolower(filtrarPost($post,'selectServicio'));
    $feeServicio = floatval(filtrarPost($post,'selectFee'));
    $tipoBoleto = (filtrarPost($post,'selectBoletos') == 'NACIONALES' ? 'nacional' : 'internacional');    
    $numeroPasajeros = 0;
     switch ($tipoServicio) {
        case 'revision':
            if ($tipoBoleto== 'nacional') {
                $feeServicio = 10;    
            }  else {
                $feeServicio = 25;
            }                        
            break;             
        case 'anulacion':
            $feeServicio = 5;            
            break;
        default:
            $numeroPasajeros = filtrarPost($post,'selectPasajeroEmitir');
            break;
    }

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "INSERT INTO Orden
                (agente,usuario,estado,empresa,gds,fecha,numero_orden,tipo_boleto,comentario,record_gds,tourcode,
                fee_servicios,observaciones,tipo,prioridad,ciudadDestino,numPasajeros,horaAsignacion,procesadaEmergencia,adjunto) 
                VALUES (:agente,null,:estado,:empresa,:gds,NOW(),
                :numero_orden,:tipo_boleto,null,:record_gds ,:tourcode ,
                :fee_servicios ,:observaciones ,:tipo,:prioridad,:ciudadDestino,
                :numPasajeros,null ,:procesadaEmergencia ,:adjunto );";

    $sth = $db->prepare($query);
    $sth->execute(array(
        ':agente' => $idAgente,
        ':estado' => 2, //Pendiente
        ':empresa' => filtrarPost($post,'selectEmpresaRecibe'),
        ':gds' => $idGDS,
        //':fecha' =>
        ':numero_orden' => $numeroOrden,
        ':tipo_boleto' => (filtrarPost($post,'selectBoletos') == 'NACIONALES' ? 'nacional' : 'internacional'),
        //':comentario' => 
        ':record_gds' => filtrarPost($post,'inputRecord'),
        ':tourcode' => filtrarPost($post,'inputTourcode'),
        ':fee_servicios' => $feeServicio,
        ':observaciones' => filtrarPost($post,'inputComentario'),
        ':tipo' => $tipoServicio,
        ':prioridad' => $prioridadCalculada,
        ':ciudadDestino' => filtrarPost($post,'selectCiudad'),
        ':numPasajeros' => $numeroPasajeros,
        //':horaAsignacion' => 
        ':procesadaEmergencia' => (filtrarPost($post,'emergencia') == 'F' ? 0 : 1),
        ':adjunto' => strlen($nombreAdjunto)>0?$GLOBALS['url_adjuntos'].$nombreAdjunto:'',
    ));
    $idNuevaOrden = $db->lastInsertId();
    $sht = null;
    $db = null;
    return $idNuevaOrden;
}

function fnConsultarGDS($post) {
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $idGDS = 0;
    $json = array();
    try {
        foreach ($db->query('SELECT id,nombre FROM Gds;') as $row) {
            if ($row['nombre'] == filtrarPost($post,'selectOperador')) {
                $idGDS = $row['id'];
            }
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
    foreach ($json as $key => $value) {
        if ($value == filtrarPost($post,'selectOperador')) {
            $idGDS = $key;
        }
    }
    $db = null;
    return $idGDS;
}

function fnCalcularPrioridad($post) {
    $prioridadCalculada = 0;

    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $ponderacion = array();
    //Primero se obtiene la informmacion de las poderaciones
    $query = 'SELECT ponderacionAnulacion,ponderacionEmision,ponderacionRevision,ponderacionNoPlanPiloto,ponderacionPlanPiloto,ponderacionNOSVI FROM Configuracion where activa = 1 and empresa = :empresa;';
    $sth = $db->prepare($query);
    $sth->execute(array(':empresa' => filtrarPost($post,'selectEmpresaRecibe'),));
    $resultado = $sth->fetchAll();
    foreach ($resultado as $value) {
        $ponderacion['ponderacionAnulacion'] = $value['ponderacionAnulacion'];
        $ponderacion['ponderacionEmision'] = $value['ponderacionEmision'];
        $ponderacion['ponderacionRevision'] = $value['ponderacionRevision'];
        $ponderacion['ponderacionNoPlanPiloto'] = $value['ponderacionNoPlanPiloto'];
        $ponderacion['ponderacionPlanPiloto'] = $value['ponderacionPlanPiloto'];
        $ponderacion['ponderacionNOSVI'] = $value['ponderacionNOSVI'];
    }
    $prioridadCalculada += intval($ponderacion['ponderacionNOSVI']);
    $tipoServicio = strtolower(filtrarPost($post,'selectServicio'));
    switch ($tipoServicio) {
        case 'revision':
            $prioridadCalculada += intval($ponderacion['ponderacionRevision']);            
            break;
        case 'anulacion':
            $prioridadCalculada += intval($ponderacion['ponderacionAnulacion']);
            break;
        case 'emision':
            $prioridadCalculada += intval($ponderacion['ponderacionEmision']);
            break;
        default:
            break;
    }
    /*
     * Para el calculo de la prioridad, en el caso de la ponderación plan piloto, solo aplicara la ponderación plan piloto , 
     * si y solo si, son ordenes de tipo emisión y revisión que posean al menos una forma de pago Tarjeta de Crédito y 
     * el campo emisor del vtc en el formulario tome el valor "Agencia" y la agencia a la que pertenece el agente este relacionada 
     * en la tabla Plan_Piloto con la aerolínea seleccionada en la forma de pago (pues si la agencia esta relacionada con la aerolínea en  
     * la tabla PLAN_PILOTO pero el emisor del vtc es M&M aplica la ponderación NOPLANPILOTO).
     */
    if (($tipoServicio == 'revision' || $tipoServicio == 'emision') && filtrarPost($post,'canal4') == "true") { // Si esta activada la opcion de T/C
        $esPlanPiloto = FALSE;
        //TODO: Validacion de Aerolinea
        $idAgencia = filtrarPost($post,'hdnIdAgencia');
        $jsonTTCard = filtrarPost($post,'hdnttcard');
        $jsonTTCard = $jsonTTCard . ']}';
        $arrTTCard = json_decode($jsonTTCard, TRUE);
        foreach ($arrTTCard['ttcard'] as $tcardItem) {
            $idAereo = $tcardItem['taereo'];
            if ($tcardItem['tvtc'] == 'AGENCIA'&& fnVerificarAerolineaAgencia($idAereo, $idAgencia)) {
                $esPlanPiloto = TRUE;
                break;
            }
        }
        if ($esPlanPiloto) {
            $prioridadCalculada += intval($ponderacion['ponderacionPlanPiloto']);
        } else {
            $prioridadCalculada += intval($ponderacion['ponderacionNoPlanPiloto']);
        }
    } else {
        $prioridadCalculada += intval($ponderacion['ponderacionNoPlanPiloto']);
    }
    $sht = null;
    $db = null;
    return $prioridadCalculada;
}

function fnInsertarDatosEmision($post, $idOrden) {
    $tipoServicio = strtolower(filtrarPost($post,'selectServicio'));
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "";
    switch ($tipoServicio) {
        case 'revision':
            $query = "INSERT INTO Revision (id,reserva_pnr,tarifa_reserva,datos_boleto,tarjet) VALUES (:id,:reserva_pnr,:tarifa_reserva,:datos_boleto,:tarjet);";
            $sth = $db->prepare($query);
            $sth->execute(array(':id' => $idOrden, ':reserva_pnr' => filtrarPost($post,'inputPnr'), ':tarifa_reserva' => filtrarPost($post,'inputTarifa'), ':datos_boleto' => filtrarPost($post,'boleN'), ':tarjet' => filtrarPost($post,'inputOrden')));
            $sht = null;
            break;
        case 'anulacion':
            $query = "INSERT INTO Anulacion (id,datos_boleto,vtc,tarjet) VALUES (:id,:datos_boleto,:vtc,:tarjet);";
            $sth = $db->prepare($query);
            $sth->execute(array(':id' => $idOrden, ':datos_boleto' => filtrarPost($post,'boleN'), ':vtc' => filtrarPost($post,'inputVtc'), ':tarjet' => filtrarPost($post,'inputOrden')));
            $sht = null;
            break;
        case 'emision':
            $query = "INSERT INTO Emision (id,reserva_pnr,tarifa_reserva) VALUES (:id,:reserva_pnr,:tarifa_reserva);";
            $sth = $db->prepare($query);
            $sth->execute(array(':id' => $idOrden, ':reserva_pnr' => filtrarPost($post,'inputPnr'), ':tarifa_reserva' => filtrarPost($post,'inputTarifa'),));
            $sht = null;
            break;
        default:
            break;
    }
    $db = null;
}

function fnGuardarArchivo($files, $numeroOrden) {
    $vartemp1 = $files["file1"]['tmp_name'];
    $fileName = '';
    $target_file = '';
    if ($vartemp1 !== "") {
        $target_dir = $GLOBALS['ruta_archivos'];
        $ext = pathinfo($files["file1"]["name"], PATHINFO_EXTENSION);
        $fileName = $numeroOrden.'.' .$ext;
        $target_file = $target_dir . $fileName;
        move_uploaded_file($vartemp1, $target_file);
    }
    return array('fileName'=>$fileName,'target'=>$target_file);
}

function fnInsertarPago($post, $idOrden, $canal) {
    //Forma de pago Efectivo
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "INSERT INTO Formapago (orden,tipo) VALUES (:orden,:tipo);";
    $tipoDeposito = '';
    if ($canal == 1) { // Pago Directo
        $tipoDeposito = 'Pago Directo';
    }
    if ($canal == 2) { //Deposito en efectivo
        $tipoDeposito = 'deposito_efectivo_transferencia_bancaria';
    }
    if ($canal == 3) { // Transferencia Bancaria
        $tipoDeposito = 'deposito_efectivo_transferencia_bancaria';
    }
    if ($canal == 4) { // T/C
        $tipoDeposito = 'Tarjeta Credito';
    }
    $sth = $db->prepare($query);
    $sth->execute(array(':orden' => $idOrden, ':tipo' => $tipoDeposito));
    $idFormaPago = $db->lastInsertId();
    $sht = null;
    $db = null;
    return $idFormaPago;
}

function fnInsertarPagoDirecto($post, $idOrden) {
    if ($post['canal1'] !== 'true') { // Pago Directo
        return;
    }
    $idFormaPago = fnInsertarPago($post, $idOrden, 1);
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "INSERT INTO Pagodirecto (id,tipo_pago,valor) VALUES (:id,:tipo_pago,:valor);";
    $sth = $db->prepare($query);
    $sth->execute(array(':id' => $idFormaPago, ':tipo_pago' => strtolower(filtrarPost($post,'selectTipo')), ':valor' => floatval(filtrarPost($post,'inputVal1'))));
    $sht = null;
    $db = null;
}

function fnInsertarDepositoEfectivo($post, $idOrden) {
    if (filtrarPost($post,'canal2') !== 'true') { //Deposito en efectivo
        return;
    }
    $tipoTransaccion = "Deposito en efectivo";
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "INSERT INTO DepefectivoTransferenciabancaria (id,banco,numero_documento,valor,transaccion) VALUES (:id,:banco,:numero_documento,:valor,:transaccion);";
    $sth = $db->prepare($query);
    $str = preg_replace("/\r+/", "-", filtrarPost($post,'depoN'));
    //$str = preg_replace( "/\r|\n/", "-", $post['depoN'] );
    $arrayDepo = explode('-', $str);
    $numeroTotalItems = count($arrayDepo);
    $numeroCompuestoItems = $numeroTotalItems / 3;
    if ($numeroCompuestoItems > 0) {
        for ($index = 0; $index < intval($numeroCompuestoItems); $index++) {
            $indiceInicial = $index * 3;
            $banco = $arrayDepo[$indiceInicial];
            $documento = $arrayDepo[$indiceInicial + 1];
            $valorDeposito = $arrayDepo[$indiceInicial + 2];
            $idFormaPago = fnInsertarPago($post, $idOrden, 2);
            $sth->execute(array(':id' => $idFormaPago, ':banco' => $banco, ':numero_documento' => $documento, ':valor' => floatval($valorDeposito), ':transaccion' => $tipoTransaccion));
        }
    }
    $sth = NULL;
    $db = null;
}

function fnInsertarTransferenciaBancaria($post, $idOrden) {
    if (filtrarPost($post,'canal3') !== 'true') { //Transferencia Bancaria
        return;
    }
    $tipoTransaccion = "Transferencia Bancaria";
    $idFormaPago = fnInsertarPago($post, $idOrden, 3);
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "INSERT INTO DepefectivoTransferenciabancaria (id,banco,numero_documento,valor,transaccion) VALUES (:id,:banco,:numero_documento,:valor,:transaccion);";
    $sth = $db->prepare($query);
    $sth->execute(array(':id' => $idFormaPago, ':banco' => filtrarPost($post,'selectBan3'), ':numero_documento' => filtrarPost($post,'inputVal31'), ':valor' => floatval(filtrarPost($post,'inputVal32')), ':transaccion' => $tipoTransaccion));
    $sth = NULL;
    $db = null;
    //['selectBan3']	string	"PICHINCHA"	
    //['inputVal31']	string	"789798789"	
    //['inputVal32']	string	"600.00"	
}

function fnInsertarTarjetaCredito($post, $idOrden) {
    if (filtrarPost($post,'canal4') !== 'true') { // T/C
        return;
    }
    $tipoTransaccion = "Tarjeta de Credito";
    $jsonTTCard = filtrarPost($post,'hdnttcard');
    $jsonTTCard = $jsonTTCard . ']}';
    $arrTTCard = json_decode($jsonTTCard, TRUE);
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $query = "INSERT INTO Tarjetacredito 
             (id,emisor_vtc,aerolinea,banco_emisor_tarjeta,tipo_tarjeta,numero_tarjeta,propietario,vence,pin,tipo_pago,plazo,tipo_autorizacion,numero_autorizacion,valor_tarjeta,interes_tarjeta,valor_total,pago_pasajeros) 
             VALUES (:id ,:emisor_vtc ,:aerolinea ,:banco_emisor_tarjeta ,:tipo_tarjeta ,:numero_tarjeta ,:propietario ,:vence ,:pin ,:tipo_pago ,
             :plazo ,:tipo_autorizacion ,:numero_autorizacion ,:valor_tarjeta ,:interes_tarjeta ,:valor_total ,:pago_pasajeros );";
    $sth = $db->prepare($query);
    foreach ($arrTTCard['ttcard'] as $tcardItem) {
        $idFormaPago = fnInsertarPago($post, $idOrden, 4);
        $fechaVence = DateTime::createFromFormat('m-d-Y', $tcardItem['tmes'] . '-01-' . $tcardItem['tanio'])->format('Y-m-d');
        $sth->execute(array(':id' => $idFormaPago, ':emisor_vtc' => $tcardItem['tvtc'], ':aerolinea' => $tcardItem['taereo'],
            ':banco_emisor_tarjeta' => $tcardItem['tbanco'], ':tipo_tarjeta' => $tcardItem['temisor'],
            ':numero_tarjeta' => $tcardItem['numero'], ':propietario' => $tcardItem['tnombre'], ':vence' => $fechaVence, ':pin' => $tcardItem['tcodigov'],
            ':tipo_pago' => $tcardItem['tpago'], ':plazo' => $tcardItem['tplazo']
            , ':tipo_autorizacion' => $tcardItem['tauto'], ':numero_autorizacion' => $tcardItem['tautorizav'], ':valor_tarjeta' => floatval($tcardItem['tneto']),
            ':interes_tarjeta' => floatval($tcardItem['tinteres']), ':valor_total' => floatVal($tcardItem['ttotal']), ':pago_pasajeros' => $tcardItem['tpax']));
    }

    $sth = NULL;
    $db = null;
}

function fnVerificarAerolineaAgencia($idAerolinea, $idAgencia) {
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $result = FALSE;
    $query = "SELECT agencia FROM Plan_Piloto where agencia=:agencia and aerolinea=:aerolinea;";
    $sth = $db->prepare($query);
    $sth->execute(array(':agencia' => $idAgencia, ':aerolinea' => $idAerolinea));
    $resultado = $sth->fetchAll();
    if (count($resultado) > 0) {
        $result = TRUE;
    }
    $sth = NULL;
    $db = null;
    return $result;
}

function fnEscribirLogErrores($msg, $trace=''){
    $file = 'colas.log';
    // Write the contents to the file, 
    // using the FILE_APPEND flag to append the content to the end of the file
    // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
    file_put_contents($file, PHP_EOL.$msg.''.$trace.PHP_EOL, FILE_APPEND | LOCK_EX);
}

function filtrarPost($post, $param) {
    if (isset($post[$param])) {
        return $post[$param];
    }  else {
        return '';
    }
}

function curlAlmacenarSolicitudOrden($post, $files, $numeroOrden) {
    try{
        $prioridadCalculada = fnCalcularPrioridad($post);
        $idGDS = fnConsultarGDS($post);
        $infoAdjunto = fnGuardarArchivo($files, $numeroOrden);
        $nombreAdjunto = $infoAdjunto['fileName'];
        $arrayResult = generarArrayEnvioOrden($post, $nombreAdjunto, $numeroOrden, $prioridadCalculada, $idGDS);
        $mensajeServicio = enviarOrdenCURL($arrayResult);
        fnEscribirLogErrores('Orden Generada '.$numeroOrden); 
    } catch (Exception $exc) {
        fnEscribirLogErrores($exc->getMessage(),$exc->getTraceAsString());                
    }
    $debug = var_export($arrayResult, true);
    $msj = var_export($mensajeServicio,true);
    fnEscribirLogErrores($debug,$msj);
    return array('savedFile'=>$infoAdjunto['target'], 'mensajeServicio'=>$mensajeServicio);
}

function generarArrayEnvioOrden($post, $nombreAdjunto, $numeroOrden, $prioridadCalculada, $idGDS) {
    $idAgente = filtrarPost($post, 'hdnIdAgente');
    $tipoServicio = strtolower(filtrarPost($post, 'selectServicio'));
    $feeServicio = floatval(filtrarPost($post, 'selectFee'));
    $tipoBoleto = (filtrarPost($post, 'selectBoletos') == 'NACIONALES' ? 'nacional' : 'internacional');
    $numeroPasajeros = 0;
    $arrayTipoOrden = array();
    $arrayPagoDirecto = array();
    $arrayPagoTC = array();
    $arrayDepefectivoTransferenciaBancaria = array();
    switch ($tipoServicio) {
        case 'revision':
            if ($tipoBoleto == 'nacional') {
                $feeServicio = 10;
            } else {
                $feeServicio = 25;
            }
            $arrayTipoOrden = array(
                'reservaPnr' => filtrarPost($post, 'inputPnr'),
                'tarifaReserva' => filtrarPost($post, 'inputTarifa'),
                'datosBoleto' => filtrarPost($post, 'boleN'),
                'tarjet' => filtrarPost($post, 'inputOrden')//el numero de la emision que se quiere revisar
            );
            break;
        case 'anulacion':
            $feeServicio = 5;
            $arrayTipoOrden = array(
                'datosBoleto' => filtrarPost($post, 'boleN'),
                'vtc' => filtrarPost($post, 'inputVtc'), //El numero de vtc si existe
                'tarjet' => filtrarPost($post, 'inputOrden')//el numero de la emision que se quiere anular
            );
            break;
        default:
            $numeroPasajeros = filtrarPost($post, 'selectPasajeroEmitir');
            $arrayTipoOrden = array(
                'reservaPnr' => filtrarPost($post, 'inputPnr'),
                'tarifaReserva' => filtrarPost($post, 'inputTarifa')
            );
            break;
    }
    if ($post['canal1'] == 'true') { // Pago Directo
        $arrayPagoDirecto[] = array
            (
            'tipoPago' => strtolower(filtrarPost($post, 'selectTipo')),
            'valor' => floatval(filtrarPost($post, 'inputVal1'))
        );
    }
    if (filtrarPost($post, 'canal2') == 'true') { //Deposito en efectivo
        $str = preg_replace("/\r+/", "-", filtrarPost($post, 'depoN'));
        $arrayDepo = explode('-', $str);
        $numeroTotalItems = count($arrayDepo);
        $numeroCompuestoItems = $numeroTotalItems / 3;
        $tipoTransaccion = "Deposito en efectivo";
        if ($numeroCompuestoItems > 0) {
            for ($index = 0; $index < intval($numeroCompuestoItems); $index++) {
                $indiceInicial = $index * 3;
                $banco = $arrayDepo[$indiceInicial];
                $documento = $arrayDepo[$indiceInicial + 1];
                $valorDeposito = $arrayDepo[$indiceInicial + 2];
                $arrayDepefectivoTransferenciaBancaria[] = array
                    (
                    'banco' => $banco,
                    'numeroDocumento' => $documento,
                    'valor' => $valorDeposito,
                    'transaccion' => $tipoTransaccion
                );
            }
        }
    }

    if (filtrarPost($post, 'canal3') == 'true') { //Transferencia Bancaria
        $tipoTransaccion = "Transferencia Bancaria";
        $arrayDepefectivoTransferenciaBancaria[] = array
            (
            'banco' => filtrarPost($post, 'selectBan3'),
            'numeroDocumento' => filtrarPost($post, 'inputVal31'),
            'valor' => floatval(filtrarPost($post, 'inputVal32')),
            'transaccion' => $tipoTransaccion
        );
    }


    if (filtrarPost($post, 'canal4') == 'true') { // T/C
        $jsonTTCard = filtrarPost($post, 'hdnttcard');
        $jsonTTCard = $jsonTTCard . ']}';
        $arrTTCard = json_decode($jsonTTCard, TRUE);
        foreach ($arrTTCard['ttcard'] as $tcardItem) {            
            $fechaVence = DateTime::createFromFormat('m-d-Y', $tcardItem['tmes'] . '-01-' . $tcardItem['tanio'])->format('Y-m-d');
            $arrayPagoTC[] = array
                (
                'emisorVtc' => $tcardItem['tvtc'],
                'aerolinea' => $tcardItem['taereo'], //el id de la aerolinea
                'bancoEmisorTarjeta' => $tcardItem['tbanco'],
                'tipoTarjeta' => $tcardItem['temisor'],
                'numeroTarjeta' => $tcardItem['numero'],
                'propietario' => $tcardItem['tnombre'],
                'vence' => $fechaVence, //fecha vencimiento
                'pin' => $tcardItem['tcodigov'], //cod seg
                'tipoPago' => $tcardItem['tpago'],
                'plazo' => $tcardItem['tplazo'],
                'tipoAutorizacion' => $tcardItem['tauto'],
                'numeroAutorizacion' => $tcardItem['tautorizav'],
                'valorTarjeta' => floatval($tcardItem['tneto']),
                'interesTarjeta' => floatval($tcardItem['tinteres']),
                'valorTotal' => floatVal($tcardItem['ttotal']),
                'pagoPasajeros' => $tcardItem['tpax']
            );
        }
    }


    $arrayResult = array
        (
        'Orden' => array
            (
            'numeroOrden' => $numeroOrden,
            'prioridad' => $prioridadCalculada,
            'procesadaEmergencia' => false, //siempre en falso pq cambia cuando se procesa
            'numPasajeros' => $numeroPasajeros,
            'tipoBoleto' => $tipoBoleto,
            'agente' => $idAgente, //El id del agente que mando la orden
            'empresa' => filtrarPost($post, 'selectEmpresaRecibe'), //el id
            'recordGds' => filtrarPost($post, 'inputRecord'),
            'tourcode' => filtrarPost($post, 'inputTourcode'),
            'feeServicios' => $feeServicio,
            'observaciones' => filtrarPost($post, 'inputComentario'), //Este es el comentario del agente
            'adjunto' => strlen($nombreAdjunto) > 0 ? $GLOBALS['url_adjuntos'] . $nombreAdjunto : '', //se guardara el adjunto y en caso de fallo se elimina
            'gds' => $idGDS, //id del gds
            'ciudadDestino' => filtrarPost($post, 'selectCiudad'), //id de la ciudad
            'tipoOrden' => array
                (//Nota: solo se seteara en este sub array el indice que corresponda al tipo de orden
                $tipoServicio => $arrayTipoOrden,
            ),
            'formasPago' => array
                (
                'tarjetasCredito' => $arrayPagoTC,
                'pagosDirectos' => $arrayPagoDirecto,
                'detbs' => $arrayDepefectivoTransferenciaBancaria
            ),
            'numeroDeBoletos' =>filtrarPost($post, 'inputNumeroBoletos')
        )
    );
    return $arrayResult;
}

function enviarOrdenCURL($arrayResult) {    
    // Initialize curl handle
    $ch = curl_init();
    // Set request url
    curl_setopt($ch, CURLOPT_URL, $GLOBALS['url_OrdenKobra']);

    /*para poder consumir la peticion via ssl*/
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   curl_setopt($ch, CURLOPT_CAINFO, getcwd() . "/ssl-ca/kobramymtravel.crt");
	//curl_setopt($ch, CURLOPT_CAINFO, getcwd() . "/ssl-ca/kobramymtravel.com.cer");
     /*para poder consumir la peticion via ssl*/


    // TRUE to include the header in the output.
    curl_setopt($ch, CURLOPT_HEADER, false);
    // A custom request method to use instead of "GET" or "POST" when doing a HTTP request.
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    if ($arrayResult != null) {
        // The full data to post in a HTTP "POST" operation.
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arrayResult));
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $resultadoEnvio = curl_exec($ch);    
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //$error = curl_error($ch);  
    //fnEscribirLogErrores($httpCode,$error);    
    if ($httpCode==200) {           
        if ($resultadoEnvio === FALSE) {            
            $jsonRespuesta = array('respuesta'=>'Error', 'detalle_respuesta'=>'El servicio de emisiones no proceso su solicitud correctamente');
        }  else {
            $jsonRespuesta = json_decode($resultadoEnvio,TRUE);    
        }    
    }  else {
        $jsonRespuesta = array('respuesta'=>'Error', 'detalle_respuesta'=>'Solicitud no enviada, el servidor respondio con el codigo '.$httpCode);
    }
    
    curl_close($ch);
    
    return $jsonRespuesta;
}

function curlAutenticarUsuario($usuario, $pwd) {
    // Initialize curl handle
    $arrayEnvio = array('Credenciales'=>  array('username'=>$usuario , 'password'=>$pwd));
    
    $ch = curl_init();
    // Set request url
    curl_setopt($ch, CURLOPT_URL, $GLOBALS['url_AuthKobra']);
    
    /*para poder consumir la peticion via ssl*/
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_CAINFO, getcwd() . "/ssl-ca/kobramymtravel.crt");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    

     /*para poder consumir la peticion via ssl*/

    // TRUE to include the header in the output.
    curl_setopt($ch, CURLOPT_HEADER, false);
    // A custom request method to use instead of "GET" or "POST" when doing a HTTP request.
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    if ($arrayEnvio != null) {
        // The full data to post in a HTTP "POST" operation.
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arrayEnvio));
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $resultadoEnvio = curl_exec($ch);    
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);  
    fnEscribirLogErrores($httpCode,$error);    
    $log = print_r($arrayEnvio,TRUE);fnEscribirLogErrores($log);
    if ($httpCode==200) {           
        if ($resultadoEnvio === FALSE) {            
            $jsonRespuesta = array('respuesta'=>'Error', 'detalle_respuesta'=>'El servicio de emisiones no proceso su solicitud correctamente');
        }  else {
            $jsonRespuesta = json_decode($resultadoEnvio,TRUE);    
        }    
    }  else {
        $jsonRespuesta = array('respuesta'=>'Error', 'detalle_respuesta'=>'Solicitud no enviada, el servidor respondio con el codigo '.$httpCode);
    }
    
    curl_close($ch);
    
    return $jsonRespuesta;
}

function fnLockUser($usuario, $lock=1) {
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);    
    $query = "UPDATE fos_user SET locked = :locked WHERE username_canonical = :username;";
    $sth = $db->prepare($query);
    $sth->execute(array(':locked' =>  $lock , ':username' => strtolower($usuario),));
    $sth = NULL;
    $db = null;
    //['selectBan3']	string	"PICHINCHA"	
    //['inputVal31']	string	"789798789"	
    //['inputVal32']	string	"600.00"	
}


function fnCheckLock($username) {    
    $db = new PDO($GLOBALS['dsn'], $GLOBALS['nombre_usuario'], $GLOBALS['contraseña'], $GLOBALS['opciones']);
    $lock = 1;
    //Primero se obtiene la informmacion de las poderaciones
    $query = 'SELECT locked from fos_user WHERE username_canonical = :username;';
    $sth = $db->prepare($query);
    $sth->execute(array(':username' => strtolower($username),));
    $resultado = $sth->fetchAll();
    foreach ($resultado as $value) {
        $lock = $value['locked'];
    }    
    return $lock==1?TRUE:FALSE;
}

?>