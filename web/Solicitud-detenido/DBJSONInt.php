<?php
require_once './DBAplicacion.php';
$retono ='';
session_start();
//$_SESSION['userRetryTimes'] =1;
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'dbEmp' : $retorno = dbObtenerEmpresas();break;       
        case 'dbCiu' : $retorno = dbObtenerCiudades();break;               
        case 'dbAgencia' : 
            $retorno = dbObtenerAgenciaxRUC($_POST['id'],$_POST['emp']);
            break;
        case 'dbInfoAgente' : 
            $retorno = dbValidarAgente($_POST['id'],$_POST['ag'],$_POST['pass']);            
            break;
        case 'dbAero' : 
            $retorno = dbObtenerAerolineas();
            break;               
    }
}
echo $retorno;
?>