<?php 
/**
 * @author Marcelo Narvaez
 * @copyright 2014
 */


	$S=array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

	date_default_timezone_set('America/Guayaquil');
	setlocale(LC_TIME, 'spanish');
	$Msg = $S[date("w")].strftime(", %d de %B de %Y, %H:%M:%S");	


    echo $Msg;	
 
?>