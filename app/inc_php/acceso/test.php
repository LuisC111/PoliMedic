

<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once '../../../config/config.php';
include_once INC_PHP_DIR.'obtenerRutaRelativa.php';
require_once INC_PHP_DIR.'Login.class.php';
include_once INC_PHP_DIR.'Emails.class.php';

$mail = "luisomg111@gmail.com";
$user = "luisomg111";

$email = new Emails();
$email->parametrizarCorreo($SMTPDebug, $SMTPAuth, $SMTPSecure, $Host, $Port, $Username, $Password, $From, $FromName);
$email->correo($mail, $user);
if ($email->Send()) {
    $datos_correo = true;
}else{
    $datos_correo = 'El correo de verificación no pudo ser enviado. ';
}
        
 
    
?>