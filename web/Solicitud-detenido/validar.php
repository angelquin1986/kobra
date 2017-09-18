<html>

</html>
<?php
	require("class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.emisionesmym.com";
	$mail->Username = "solicitud@emisionesmym.com";
	$mail->Password = "mym12345";
	$mail->CharSet = "UTF-8";
	$mail->From = "marcelo.narvaez@mymtravel.com";
	$mail->FromName = "MYM TRAVEL GROUP";
	$mail->Timeout=120;


	$mail->Subject = "Hola";
	$mail->AddAddress("marcelo.narvaez@mymtravel.com");
	$mail->AddBCC("solicitud@emisionesmym.com");
	$mail->AddBCC("solicitud@mmtravelgroup.com");
	$body = "Hola";
	$mail->Body = "hola";
	$mail->Send();
	
	echo " Enviar de correo ". $mail->ErrorInfo;


?>