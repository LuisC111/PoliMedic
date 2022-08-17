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

        case 'addRole':

            $loadRole = Dashboard::login();
            $addRole = $loadRole->addRole($id);
            $combos = $addRole;

        break;

        case 'tblFamilyUser':
            
            $loadFamilyUser = Dashboard::login();
            $tblFamilyUser = $loadFamilyUser->tblFamilyUser($id);
            $combos = $tblFamilyUser;

        break;

        case 'detalleTblFamilyUser':
            
            $loadFamilyUser = Dashboard::login();
            $detalleTblFamilyUser = $loadFamilyUser->detalleTblFamilyUser($id);
            $combos = $detalleTblFamilyUser;

        break;

        case 'addMember':
            
            $identification_type    = eliminar_acentos($_POST['identification_type']);
            $identification_number  = $_POST['identification_number'];
            $firstname              = eliminar_acentos($_POST['firstname']);
            $lastname               = eliminar_acentos($_POST['lastname']);
            $gender                 = $_POST['gender'];
            $birthdate              = $_POST['birthdate'];
            $email                  = $_POST['email'];
            $user                   = substr(strtolower($firstname), 0, 1).substr(strtolower($lastname), 0, 3).substr($identification_number, 0, 4);        
            
            $loadFamilyRole = Dashboard::login();
            $addMember = $loadFamilyRole->addMember($id,$user,$email,$identification_type,$identification_number,$firstname,$lastname,$gender,$birthdate);
            $combos = $addMember;
            $userMember = $combos['user'];
            $passMember = $combos['password'];

            $mail = new Emails();
            $mail->parametrizarCorreo($SMTPDebug, $SMTPAuth, $SMTPSecure, $Host, $Port, $Username, $Password, $From, $FromName);
            $mail->correoMember($email, $userMember, $passMember);
            if ($mail->Send()) {
                $datos_correo = true;
            }else{
                $datos_correo = 'El correo de verificación no pudo ser enviado. ';
            }

        break;

        case 'tblHealth_condition_admin':
                
                $loadHealth_condition_admin = Dashboard::login();
                $tblHealth_condition_admin = $loadHealth_condition_admin->tblHealth_condition_admin();
                $combos = $tblHealth_condition_admin;

        break;

        case 'tblHealth_condition_admin_detail':
                    
                $loadHealth_condition_admin = Dashboard::login();
                $tblHealth_condition_admin_detail = $loadHealth_condition_admin->tblHealth_condition_admin_detail($id);
                $combos = $tblHealth_condition_admin_detail;

        break;

        case 'tblHealth_condition_member':

                $loadHealth_condition_member = Dashboard::login();
                $tblHealth_condition_member = $loadHealth_condition_member->tblHealth_condition_member($id);
                $combos = $tblHealth_condition_member;

        break;

        case 'tblHealth_condition_owner':

                $loadHealth_condition_owner = Dashboard::login();
                $tblHealth_condition_owner = $loadHealth_condition_owner->tblHealth_condition_owner($id);
                $combos = $tblHealth_condition_owner;

        break;

        case 'lab_type':

                $loadLab_type = Dashboard::login();
                $lab_type = $loadLab_type->lab_type();
                $combos = $lab_type;

        break;

        case 'common_disease':

                $loadCommon_disease = Dashboard::login();
                $common_disease = $loadCommon_disease->common_disease();
                $combos = $common_disease;

        break;

        case 'addHealthCondition':

                $addHealthCondition = Dashboard::login();
                $healthCondition = $addHealthCondition->addHealthCondition($id, $_POST['lab_type'], $_POST['extension'],$_POST['family_core'], $_POST['common_disease'], $_POST['particular_desease']);
                $combos = $healthCondition;

        break;

        case 'addHealthConditionMember':

            $addHealthCondition = Dashboard::login();
            $healthCondition = $addHealthCondition->addHealthConditionMember($id, $_POST['idMember'], $_POST['lab_type'], $_POST['extension'],$_POST['family_core'], $_POST['common_disease'], $_POST['particular_desease']);
            $combos = $healthCondition;

    break;
        
        case 'listMembers':

                $listMembers = Dashboard::login();
                $listMembers = $listMembers->listMembers($id, $_POST['idOwner']);
                $combos = $listMembers;

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