<?php

/**
 * @author TLG. Marcelo Narvaez
 * @copyright 2013
 */
function mensaje($orden,$descCiudad) {
    $S = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');

    date_default_timezone_set('America/Guayaquil');
    setlocale(LC_TIME, 'spanish');
    $fecha = $S[date("w")] . strftime(", %d de %B de %Y, %H:%M");

    $mensaje = "
";
    $mensaje .= " SERVICIO         :  " . asunto('') . " \n";
    $mensaje .= " CIUDAD DESTINO EMISION : " . $descCiudad . "\n";
    $mensaje .= " NUMERO DE ORDEN  :  " . $orden . "\n";
    $mensaje .= " FECHA DE ENVIO   :  " . $fecha . "\n\n";

    $mensaje .= " CEDULA / RUC     :  " . $_POST['inputRuc'] . "\n";
    $mensaje .= " AGENCIA          :  " . $_POST['inputAgencia'] . "\n";
    $mensaje .= " AGENTE           :  " . $_POST['inputAgente'] . "\n";
    $mensaje .= " E-MAIL           :  " . $_POST['inputCorreo'] . "\n";
    $mensaje .= " TELEFONOS        :  " . $_POST['inputTelefono'] . " \t   CELULAR    :  " . $_POST['inputCelular'] . "\n\n";
    $mensaje .= " OPERADOR         :  " . $_POST['selectOperador'] . "\n";
    $mensaje .= " RECORD           :  " . $_POST['inputRecord'] . "\n";
    if ($_POST['inputTourcode'] != '') {
        $mensaje .= " TOURCODE         :  " . $_POST['inputTourcode'] . "\n";
    }
    if ($_POST['selectFee'] !== "0") {
        $mensaje .= " FEE              :  " . $_POST['selectFee'] . " USD + Iva \n\n";
    } else {
        $mensaje .= "\n";
    }
    if ($_POST['inputOrden'] !== '') {
        $mensaje .= " NUMERO DE ORDEN  :  " . $_POST['inputOrden'] . "\n";
    }
    if ($_POST['selectServicio'] == 'ANULACION') {
        $mensaje .= " NUMERO DE BOLETOS  Y NOMBRE DE PASAJEROS  :  \n" . $_POST['boleN'] . "\n";
        $mensaje .= " TIPO DE PAGO AL TKTT :  " . $_POST['selectPago'] . "\n\n";
        if ($_POST['inputVtc'] !== '') {
            $mensaje .= " NUMERO DE VTC :  " . $_POST['inputVtc'] . "\n\n";
        }
    } else {
        if ($_POST['selectServicio'] == 'REVISION') {
            $mensaje .= " NUMERO DE BOLETOS Y NOMBRE DE PASAJEROS  : \n " . $_POST['boleN'] . "\n";
        }

        $mensaje .= "           COPIA RESERVA (PNR) \n";
        $mensaje .= "-------------------------------------------------------------------------------- \n";
        $mensaje .= $_POST['inputPnr'] . "\n\n";
        $mensaje .= "           COPIA TARIFA RESERVA \n";
        $mensaje .= "-------------------------------------------------------------------------------- \n";
        $mensaje .= $_POST['inputTarifa'] . "\n\n";
        if ($_POST['canal1'] == "true") {
            $mensaje .= "           PAGO DIRECTO MYM \n";
            $mensaje .= "-------------------------------------------------------------------------------- \n";
            $mensaje .= "  TIPO DE PAGO     : " . $_POST['selectTipo'] . "\n";
            $mensaje .= "  VALOR            : $ " . $_POST['inputVal1'] . "\n\n";
        }
        if ($_POST['canal2'] == "true") {
            $mensaje .= "           PAGO DEPOSITOS \n";
            $mensaje .= "-------------------------------------------------------------------------------- \n";
            $mensaje .= $_POST['depoN'] . "\n";
        }
        if ($_POST['canal3'] == "true") {
            $mensaje .= "           PAGO TRANSFERENCIA BANCARIA \n";
            $mensaje .= "-------------------------------------------------------------------------------- \n";
            $mensaje .= "  AL BANCO DE M&M     : " . $_POST['selectBan3'] . " \n";
            $mensaje .= "  N. DE TRANSFERENCIA : " . $_POST['inputVal31'] . " \n";
            $mensaje .= "  VALOR TRANSFERIDO   : $ " . $_POST['inputVal32'] . " \n\n";
        }
        if ($_POST['canal4'] == "true") {
            $mensaje .= $_POST['ttcard'] . " \n";
        }
    }
    if ($_POST['inputComentario'] != "") {
        $mensaje .= "           VARIOS COMENTARIOS \n";
        $mensaje .= "-------------------------------------------------------------------------------- \n";
        $mensaje .= $_POST['inputComentario'] . " \n";
    }
    return($mensaje);
}

//function mail_backup($sPara, $sAsunto, $sTexto, $sDe){
//	$sCabeceras = "From: " . $sDe . " \r\n";
//    $sCabeceras .= "MIME-version: 1.0\n"; 
//    $sTexto = $sTexto;
//    mail($sPara, $sAsunto, $sTexto, $sCabeceras); 
//}
function mail_backup($sPara, $sAsunto, $sTexto, $sDe) {
    require("class.phpmailer.php");

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.mmtravelgroup.com";
//	$mail->Port = 25;
    $mail->Username = "solicitud";
    $mail->Password = "mym12345";

    $mail->From = $sDe;
    $mail->FromName = "MYM TRAVEL GROUP";
    $mail->Timeout = 120;

    $mail->Subject = $sAsunto;
    $mail->AddAddress($sPara);
    $mail->AddBCC("solicitud@emisionesmym.com");

    $body.= $sTexto;
    $mail->Body = $body;

    return($mail->Send());
}

//function destino() {
//    if ($_POST['selectCiudad'] == "GYE")        
//        $dato = "GUAYAQUIL";
//    else
//        $dato = "QUITO";
//
//    return($dato);
//}

function asunto($descCiudad='') {
    if ($_POST['emergencia'] == "T")
        $asunto = "EMERGENCIA ";
    else
        $asunto = "SOLICITUD ";
    $asunto .= $_POST['selectServicio'] . " WEB " . $descCiudad . " BOLETOS " . $_POST['selectBoletos'];

    return($asunto);
}

function contador() {
    $a = 100000000 * date("y");
    $m = 1000000 * date("n");
    $d = 10000 * date("j");
    $s = 9000;
    $t = $a + $m + $d + $s;

    $archivo = "numero.dat";
    $abre = fopen($archivo, "r");
    $total = fread($abre, filesize($archivo));

    fclose($abre);
    $abre = fopen($archivo, "w");
    if ($t > $total)
        $total = $t + 1;
    else
        $total = $total + 1;
    $grabar = fwrite($abre, $total);
    fclose($abre);
//fin de contador
    return $total;
}

// inicio del programa 

$varname1 = $_FILES["file1"]['name'];
$vartemp1 = $_FILES["file1"]['tmp_name'];
$tamanio1 = $_FILES["file1"]['size'];

$varname2 = "";//$_FILES["file2"]['name']
$vartemp2 = "";//$_FILES["file2"]['tmp_name'];
$tamanio2 = 0;//$_FILES["file2"]['size'];

$varname3 = "";//$_FILES["file3"]['name'];
$vartemp3 = "";//$_FILES["file3"]['tmp_name'];
$tamanio3 = 0;//$_FILES["file3"]['size'];

$valortxt = false;

if ($_POST['inputRuc'] == "")
    $valortxt = true;
if ($_POST['inputAgencia'] == "")
    $valortxt = true;
if ($_POST['inputAgente'] == "")
    $valortxt = true;
if ($_POST['inputCorreo'] == "")
    $valortxt = true;
if ($_POST['inputTelefono'] == "")
    $valortxt = true;
if ($_POST['inputCelular'] == "")
    $valortxt = true;
if ($_POST['selectCiudad'] == "Seleccione...")
    $valortxt = true;

if ($_POST['selectBoletos'] == "Seleccione...")
    $valortxt = true;
if ($_POST['selectOperador'] == "")
    $valortxt = true;
if ($_POST['selectServicio'] == "Seleccione...")
    $valortxt = true;
if (isset($_POST['selectFee'])){
	if ($_POST['selectFee'] == "Seleccione...")
		$valortxt = true;
}

if ($tamanio1 > 4194304 && $varname1 !== "") {
    echo "ERROR3," . $varname1;
} else if ($tamanio2 > 4194304 && $varname2 !== "") {
    echo "ERROR4," . $varname2;
} else if ($tamanio3 > 4194304 && $varname3 !== "") {
    echo "ERROR5," . $varname3;
} else {
    if ($valortxt == false) {        
        require("class.phpmailer.php");
        $orden = contador();
        // Parte del almacenamiento en la BD
        require './DBAplicacion.php';
        //aqui se almacena los datos en la orden de la base de datos
        $respuestaOperacion = curlAlmacenarSolicitudOrden($_POST,$_FILES,$orden);
        $savedFile = $respuestaOperacion['savedFile'];
        $mensajeSistema = $respuestaOperacion['mensajeServicio'];
        if($mensajeSistema['respuesta']=='Error'){
            echo "ERROR6," . $mensajeSistema['detalle_respuesta'];
            return;
        }
        $descCiudad = dbObtenerCiudad($_POST['selectCiudad']);
        // Fin Parte del almacenamiento en la BD
        sleep(3);
        $respuesta = "";
        $Para = $_POST['inputCorreo'];        
        $De = "emisionweb@mymtravel.com";        
        $asunt = asunto($descCiudad);
        $mensa = mensaje($orden,$descCiudad);

        $mail = new PHPMailer();
        $mail->SMTPDebug = 1;
        $mail->IsSMTP();
        //$mail->SMTPSecure = "ssl";
        $mail->SMTPAuth = false;
        $mail->Port = 25;
		
        /*$mail->Host = "kurma.hosting-mexico.net";
        $mail->Username = "emisiones@mymtravelgroup.com";
        $mail->Password = "mym12345$$";*/
		
        $mail->Host = "smtp-relay.gmail.com";
        $mail->Username = "emisiones@mymtravel.com";
        $mail->Password = "Emision$$14!";

        $mail->From = $De;
        $mail->FromName = "MYM TRAVEL GROUP";
        $mail->Timeout = 180;

        $mail->Subject = asunto($descCiudad); // $Asunto;
        $mail->AddAddress($Para);

        //$mail->AddBCC("antonio.nodal@mymtravel.com");        
        
        $mail->AddBCC("emisiones@mymtravel.com");
        $mail->AddBCC("paulina.freire@mymtravel.com");
        $mail->AddBCC("emisioncontabilidad@mymtravel.com");
       
        if ($_POST['emergencia'] == "T") {
            $mail->AddBCC("emergencias@mymtravel.com");
        }
        if ($savedFile !== "") {
            $mail->AddAttachment($savedFile, $varname1);
        }
        /*if ($varname1 !== "") {
            $mail->AddAttachment($vartemp1, $varname1);
        }*/
        if ($varname2 !== "") {
            $mail->AddAttachment($vartemp2, $varname2);
        }
        if ($varname3 !== "") {
            $mail->AddAttachment($vartemp3, $varname3);
        }



        /**$body = $mensa;
        $mail->Body = $body;                
        $done = $mail->Send();
        $retry = 1;
        while ((!$done) && ($retry < 5)) {
            sleep(5);            
            $done = $mail->Send();       
            $retry = $retry + 1;
        }//intenta enviar el correo 5 veces
        if ($done) {
            echo $orden;
        } else {
            echo "ERROR1";
        }*/
           echo $orden;
    } else {
        echo "ERROR2";
    }
}
?>
