
<?php
 $GLOBALS['dsn'] = 'mysql:host=localhost;dbname=kobratest;charset=utf8';
 $GLOBALS['nombre_usuario'] = 'kobra';
 $GLOBALS['contraseña'] = 'Kobra12345$$';
 $GLOBALS['opciones'] = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
 $GLOBALS['ruta_archivos'] = "../uploads/adjuntos/";
 $GLOBALS['url_adjuntos'] = "http://kobratest.mymtravel.com/uploads/adjuntos/";
 $GLOBALS['url_OrdenKobra'] = 'http://kobratest.mymtravel.com/cyborg/save/';
 $GLOBALS['url_AuthKobra'] = 'http://kobratest.mymtravel.com/cyborg/verify/login/';
 $GLOBALS['auth_MaxIntentos'] = 3;
?>

