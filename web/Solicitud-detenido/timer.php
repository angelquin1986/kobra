<?php 
/**
 * @author Marcelo Narvaez
 * @copyright 2015
 */


function Tiempo($hora, $minu){
	$ho = strftime("%H");
	$mi = strftime("%M");
	$msga = "F";

	if($ho >= $hora){
		if($mi >= $minu) {$msga = "T";}
	}
	
	return $msga;
}
	
    date_default_timezone_set('America/Guayaquil');
    setlocale(LC_TIME, 'spanish');

    $hor = strftime("%H");
    $min = strftime("%M");
    $seg = strftime("%S");
    $sem = date("w");


/* ingresar las horas de los horarios de emergencia en formato de 0-23 h */
    $lunho = 19;
    $marho = 19;
    $mieho = 19;
    $jueho = 19;
    $vieho = 19;
    $sabho = 13;
    $domho = 0;

/* ingresar los minutos de los horarios de emergencia en formato de 0-59 min */
    $lunmi = 0;
    $marmi = 0;
    $miemi = 0;
    $juemi = 0;
    $viemi = 0;
    $sabmi = 0;
    $dommi = 0;

/* dia de emergencia cambiar valor 0 = Dom, 1 = Lun, 2 = Mar, 3 = Mie, 4 = Jue, 5 = Vie, 6 = Sab */
    $emr = 0;	

    if($sem == 1){ $Msg = Tiempo($lunho, $lunmi); }
    if($sem == 2){ $Msg = Tiempo($marho, $marmi); }
    if($sem == 3){ $Msg = Tiempo($mieho, $miemi); }
    if($sem == 4){ $Msg = Tiempo($jueho, $juemi); }
    if($sem == 5){ $Msg = Tiempo($vieho, $viemi); }
    if($sem == 6){ $Msg = Tiempo($sabho, $sabmi); }
    if($sem == 0){ $Msg = Tiempo($domho, $dommi); }

    if($emr == $sem){$Msg = "T";}

    echo $Msg;

?>
