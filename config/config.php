<?php
$RUTA_LOCAL = dirname(__FILE__);
$RUTA_PROYECTO = dirname($RUTA_LOCAL);
if (!defined('APP_DIR')) {
    define('APP_DIR',       $RUTA_PROYECTO . '/app/');
}
if (!defined('AUX_DIR')) {
    define('AUX_DIR',       $RUTA_PROYECTO . '/include/');
    define('AUX_CSS',       $RUTA_PROYECTO . '/include/css/');
    define('AUX_INC_PHP',   $RUTA_PROYECTO . '/include/inc_php/');
    define('AUX_JS',        $RUTA_PROYECTO . '/include/js/');
    define('AUX_FONTS',     $RUTA_PROYECTO . '/include/fonts/');
}
if (!defined('CONFIG_DIR')) {
    define('CONFIG_DIR',    $RUTA_PROYECTO . '/config/');
}
if (!defined('DASH_DIR')) {
    define('DASH_DIR',       $RUTA_PROYECTO . '/app/assets/dashboard/');
}
if (!defined('CSS_DIR')) {
    define('CSS_DIR',       $RUTA_PROYECTO . '/app/assets/css/');
}
if (!defined('IMAGENES_DIR')) {
    define('IMAGENES_DIR',  $RUTA_PROYECTO . '/app/assets/img/');
}
if (!defined('INC_PHP_DIR')) {
    define('INC_PHP_DIR',   $RUTA_PROYECTO . '/app/inc_php/');
}
if (!defined('JS_DIR')) {
    define('JS_DIR',        $RUTA_PROYECTO . '/app/assets/js/');
}
if (!defined('TMP_DIR')) {
    define('TMP_DIR',       $RUTA_PROYECTO . '/tmp/');
}

if (!defined('RUTA_LOGIN')) {
    define('RUTA_LOGIN',    $RUTA_PROYECTO . '/accesoLogin');
}

if (!defined('PHPMAILER_DIR')) {
    define('PHPMAILER_DIR', $RUTA_PROYECTO.'/include/inc_php/PHPMailer_v5.2.23/');
}

if (!defined('SMARTY_DIR')) {
    define('SMARTY_DIR',        $RUTA_PROYECTO . '/include/inc_php/smarty-4.1.1/libs/');
    define('TEMPLATES_DIR',     $RUTA_PROYECTO . '/app/templates/');
    define('CACHE_DIR',         $RUTA_PROYECTO . '/tmp/templates/cache/');
    define('CONFIGS_DIR',       $RUTA_PROYECTO . '/tmp/templates/configs/');
    define('COMPILE_DIR',       $RUTA_PROYECTO . '/tmp/templates/templates_c/');
    define('LEFT_DELIMITER',    '<!--{');
    define('RIGHT_DELIMITER',   '}-->');
}


/******************************************************************************/
/********************* Configuración de Smarty Templates **********************/
/******************************************************************************/
require SMARTY_DIR . 'Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = TEMPLATES_DIR;
$smarty->compile_dir = COMPILE_DIR;
$smarty->cache_dir = CACHE_DIR;
$smarty->config_dir = CONFIGS_DIR;
$smarty->left_delimiter = LEFT_DELIMITER;
$smarty->right_delimiter = RIGHT_DELIMITER;

/******************************************************************************/
/******************* Configuracion De Correos Electrónicos ********************/
/******************************************************************************/
$SMTPDebug = 0;
$SMTPAuth = true;
$SMTPSecure = 'tls';
$Host = 'smtp.gmail.com';
$Port = 587;
$Username= 'ugcpruebas@gmail.com';
$Password = 'secret';
$From  = 'no-reply@polimedic.com';
$FromName  = utf8_encode('PoliMedic | Gestiona tu Salud');                  

