<?php
error_reporting(0);

require_once '../config/config.php';
include_once INC_PHP_DIR.'obtenerRutaRelativa.php';

$RUTA_ARCHIVO   = dirname(__FILE__);

$rutaImagenes   = obtenerRutaRelativa($RUTA_ARCHIVO, IMAGENES_DIR);
$rutaAuxCss     = obtenerRutaRelativa($RUTA_ARCHIVO, AUX_CSS);
$rutaAuxJs      = obtenerRutaRelativa($RUTA_ARCHIVO, AUX_JS);
$rutaAuxFonts  	= obtenerRutaRelativa($RUTA_ARCHIVO, AUX_FONTS);
$rutaAppCss     = obtenerRutaRelativa($RUTA_ARCHIVO, CSS_DIR);
$rutaAppJs      = obtenerRutaRelativa($RUTA_ARCHIVO, JS_DIR);


$titulo = 'PoliMedic | Sistema de Gestión de Datos de Salud';
$date = date("YmdHi");

$smarty->assign("sid"                   , SID);
$smarty->assign('titulo'                , $titulo);
$smarty->assign('AUX_CSS'               , $rutaAuxCss);
$smarty->assign('AUX_JS'                , $rutaAuxJs);
$smarty->assign('AUX_FONTS'             , $rutaAuxFonts);
$smarty->assign('APP_CSS'               , $rutaAppCss);
$smarty->assign('APP_JS'                , $rutaAppJs);
$smarty->assign('APP_IMG'              	, $rutaImagenes);
$smarty->assign('fav'              	    , $rutaImagenes."logo.png");
$smarty->assign('bannerImg1'            , $rutaImagenes."banner/banner_1.jpg");
$smarty->assign('bannerImg2'            , $rutaImagenes."banner/banner_2.jpg");
$smarty->assign('bannerImg3'            , $rutaImagenes."banner/banner_3.jpg");
$smarty->assign('bannerImgLaboratorio'  , $rutaImagenes."banner/banner_Laboratorio.jpg");
$smarty->assign('bannerImgMedicinaGe'   , $rutaImagenes."banner/banner_Medicina_general.jpg");
$smarty->assign('bannerImgSeguiSalud'   , $rutaImagenes."banner/banner_seguimiento_salud.jpg");
$smarty->assign('bannerImgRadio'        , $rutaImagenes."banner/banner_radiografia.jpg");
$smarty->assign('bannerImgControles'    , $rutaImagenes."banner/banner_seguimiento_salud.jpg");
$smarty->assign('date'              	, $date);



$smarty->display('acceso/base_acesso.tpl');
$smarty->display('acceso/acceso.tpl');
