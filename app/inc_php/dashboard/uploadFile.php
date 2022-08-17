<?php

require_once '../../../config/config.php';
require_once INC_PHP_DIR . 'ConexionesBD.class.php';



$return = Array('ok' => TRUE);
$solicitud = $_POST['solicitud'];
$upload_folder = APP_DIR . 'uploaded_files/lab_exam';
$tipo_archivo = $_FILES['archivo']['type'];
$nombre_archivo = $_FILES['archivo']['name'];
$fileNameCmps = explode(".", $nombre_archivo);
$fileExtension = strtolower(end($fileNameCmps));
$tamano_archivo = $_FILES['archivo']['size'];
$tmp_archivo = $_FILES['archivo']['tmp_name'];
$archivador = $upload_folder . '/' . $solicitud . '.' . $fileExtension;

    if (!move_uploaded_file($tmp_archivo, $archivador)) {
        $return = Array('ok' => FALSE, 'msg' => "Ocurrio un error al subir el archivo. " . $nombre_archivo . " No pudo guardarse.", 'status' => 'error');
    }

header('Content-Type: application/json');
echo json_encode($return);



