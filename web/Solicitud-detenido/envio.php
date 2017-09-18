<?php
/*
print_r($_FILES);
exit;
*/
	require("class.phpmailer.php");
	
	$varname1 = $_FILES['file1']['name']; 
	$vartemp1 = $_FILES['file1']['tmp_name'];

	$mail = new PHPMailer();
	$mail->SMTPDebug = 0;
	$mail->IsSMTP();
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;
	$mail->SMTPAuth = true;

	$mail->Host = "smtp.gmail.com";
	$mail->Username = "emisiones@mymtravel.com";
	$mail->Password = "Emision$$14!";

	$mail->Timeout=120;

	$mail->Subject = "Hola";
	$mail->AddAddress("marcelo.narvaez@mymtravel.com");
//	$mail->AddBCC("solicitud@emisionesmym.com");
//	$mail->AddBCC("solicitud@mmtravelgroup.com");

	if ($varname1 !== "") { $mail->AddAttachment($vartemp1, $varname1); }

	$body = "
	Hola
	Nombre: ".$_POST["Nombre"]."
	Apellido: ".$_POST["Apellido"]."
	
	";
	$mail->Body = $body;
	$mail->Send();
	
	echo " Enviar de correo "; //. $mail->ErrorInfo;

?>