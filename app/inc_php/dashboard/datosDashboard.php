<?php

error_reporting(E_ALL ^ E_NOTICE);
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SERVER['HTTP_REFERER']) && $_POST){ 


    require_once '../../../config/config.php';
    include_once INC_PHP_DIR.'obtenerRutaRelativa.php';
    require_once INC_PHP_DIR.'Dashboard.class.php';
    include_once INC_PHP_DIR.'Emails.class.php';

    function eliminar_acentos($cadena){
		
        //Reemplazamos la A y a
        $cadena = str_replace(
        array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
        array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
        $cadena
        );

        //Reemplazamos la E y e
        $cadena = str_replace(
        array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
        array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
        $cadena );

        //Reemplazamos la I y i
        $cadena = str_replace(
        array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
        array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
        $cadena );

        //Reemplazamos la O y o
        $cadena = str_replace(
        array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
        array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
        $cadena );

        //Reemplazamos la U y u
        $cadena = str_replace(
        array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
        array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
        $cadena );

        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
        array('Ñ', 'ñ', 'Ç', 'ç'),
        array('N', 'n', 'C', 'c'),
        $cadena
        );
        
        return $cadena;
    }

    $casoConsulta           = $_POST['casoConsulta'];
    $id = $_POST['valorConsulta'];

    switch ($casoConsulta){

        case 'tblUser':

            $loadUser = Dashboard::login();
            $tblUser = $loadUser->tblUser();
            $combos = $tblUser;

        break;

        case 'detalleTblUser':

            $loadUser = Dashboard::login();
            $detalleTblUser = $loadUser->detalleTblUser($id);
            $combos = $detalleTblUser;

        break;

        case 'inactiveUser':

            $loadUser = Dashboard::login();
            $inactiveUser = $loadUser->inactiveUser($id);
            $combos = $inactiveUser;

        break;

        case 'tblFamily_core':

            $loadFamily_core = Dashboard::login();
            $tblFamily_core = $loadFamily_core->tblFamily_core();
            $combos = $tblFamily_core;

        break;

        case 'detalleTblFamily_core':
            
            $loadFamily_core = Dashboard::login();
            $detalleTblFamily_core = $loadFamily_core->detalleTblFamily_core($id);
            $combos = $detalleTblFamily_core;

        break;

        case 'tblRole':

            $loadRole = Dashboard::login();
            $tblRole = $loadRole->tblRole();
            $combos = $tblRole;

        break;

        case 'detalleTblRole':

            $loadRole = Dashboard::login();
            $detalleTblRole = $loadRole->detalleTblRole($id);
            $combos = $detalleTblRole;

        break;

        case 'inactiveRole':

            $loadRole = Dashboard::login();
            $inactiveRole = $loadRole->inactiveRole($id);
            $combos = $inactiveRole;

        break;


       

    }

        





if($error){
    $response = array('success' => false, 'error' => $error['message'].' '.$error['sqltext']);
    echo json_encode($response);
}
else{
    $response = array('success' => true, 'combos' => $combos);
    echo json_encode($response);
}

}