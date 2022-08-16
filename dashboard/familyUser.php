<?php
error_reporting(0);

require_once '../config/config.php';
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../acceso/accesoLogin');
}

include_once INC_PHP_DIR.'obtenerRutaRelativa.php';
$RUTA_ARCHIVO   = dirname(__FILE__);
$rutaImagenes   = obtenerRutaRelativa($RUTA_ARCHIVO, IMAGENES_DIR);
$rutaAuxCss     = obtenerRutaRelativa($RUTA_ARCHIVO, AUX_CSS);
$rutaAuxJs      = obtenerRutaRelativa($RUTA_ARCHIVO, AUX_JS);
$rutaAuxFonts  	= obtenerRutaRelativa($RUTA_ARCHIVO, AUX_FONTS);
$rutaAppCss     = obtenerRutaRelativa($RUTA_ARCHIVO, CSS_DIR);
$rutaAppJs      = obtenerRutaRelativa($RUTA_ARCHIVO, JS_DIR);
$rutaDashboard  = obtenerRutaRelativa($RUTA_ARCHIVO, DASH_DIR);


$titulo = 'Tu Nucleo Familiar | PoliMedic';
$date = date("YmdHi");

$smarty->assign("sid"                   , SID);
$smarty->assign('titulo'                , $titulo);
$smarty->assign('AUX_CSS'               , $rutaAuxCss);
$smarty->assign('AUX_JS'                , $rutaAuxJs);
$smarty->assign('AUX_FONTS'             , $rutaAuxFonts);
$smarty->assign('APP_CSS'               , $rutaAppCss);
$smarty->assign('APP_JS'                , $rutaAppJs);
$smarty->assign('APP_DASH'              , $rutaDashboard);
$smarty->assign('APP_IMG'              	, $rutaImagenes);
$smarty->assign('fav'              	    , $rutaImagenes."logo.png");
$smarty->assign('date'              	, $date);
$smarty->assign('username'              , $_SESSION['firstname']. " " .$_SESSION['lastname']);  
$smarty->assign('id'                    , $_SESSION['id']);
$smarty->assign('id_number'             , $_SESSION['id_number']);
$smarty->assign('email'                 , $_SESSION['email']);
$smarty->assign('role'                  , $_SESSION['role_id']);
$smarty->assign('familycore_id'         , $_SESSION['familycore_id']);
$smarty->assign('users'                 , $_SESSION['users']);
$smarty->assign('usersToday'            , $_SESSION['users_today'] == null ? 0 : $_SESSION['users_today']);
$smarty->assign('families'              , $_SESSION['families']);
$smarty->assign('roles'                 , $_SESSION['roles']);


$smarty->display('dashboard/base_dashboard.tpl');
$smarty->display('dashboard/familyUser.tpl');


