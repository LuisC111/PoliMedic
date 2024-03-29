<?php

error_reporting(E_ALL ^ E_NOTICE);
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SERVER['HTTP_REFERER']) && $_POST){ 


    require_once '../../../config/config.php';
    include_once INC_PHP_DIR.'obtenerRutaRelativa.php';
    require_once INC_PHP_DIR.'Login.class.php';
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
    $username               = $_POST['username'];
    $password               = md5($_POST['password']);
    $identification_type    = eliminar_acentos($_POST['identification_type']);
    $identification_number  = $_POST['identification_number'];
    $firstname              = eliminar_acentos($_POST['firstname']);
    $lastname               = eliminar_acentos($_POST['lastname']);
    $gender                 = $_POST['gender'];
    $birthdate              = $_POST['birthdate'];
    $email                   = $_POST['email'];
    $user                   = substr(strtolower($firstname), 0, 1).substr(strtolower($lastname), 0, 3).substr($identification_number, 0, 4);


    switch ($casoConsulta){

        case 'validaAcceso':

            $validarAcceso = Login::login();

            $acceso = $validarAcceso->login_users($username,$password);

            if($acceso)
            {
                $combos = array("id" => $_SESSION['id'],"id_number" => $_SESSION['id_number'], "email" => $_SESSION['email'], "role" => $_SESSION['role_id'], "firstname" => $_SESSION['firstname'], "lastname" => $_SESSION['lastname'], "familycore_id" => $_SESSION['familycore_id'], "temporal_password" => $_SESSION['temporal_password'],"users" => $_SESSION['users'],"users_today" => $_SESSION['users_today'], "families" => $_SESSION['families'], "roles" => $_SESSION['roles'], "user_core" => $_SESSION['user_core'],"count_core" => $_SESSION['count_core'],"user_role" => $_SESSION['user_role']);
                
            }else{
                $combos = $acceso;
            }


        break;

        case 'verificar':

            $code = random_int(0, 9).random_int(0, 9).random_int(0, 9).random_int(0, 9).random_int(0, 9).random_int(0, 9);
            $mail = new Emails();
            $mail->parametrizarCorreo($SMTPDebug, $SMTPAuth, $SMTPSecure, $Host, $Port, $Username, $Password, $From, $FromName);
            $mail->correo($email, $user, $code);
            if ($mail->Send()) {
                $datos_correo = true;
            }else{
                $datos_correo = 'El correo de verificación no pudo ser enviado. ';
            }

        break;

        case 'registro':

            $registroUsuario = Login::login();

            $registro = $registroUsuario->registro_users($user,$email,$password,$identification_type,$identification_number,$firstname,$lastname,$gender,$birthdate);

            $combos = $registro;

        break;

        case 'forgotPassword':        
            function correoPassword($email, $combos)
            {
                $mail = new Emails();
                $mail->parametrizarCorreo($SMTPDebug, $SMTPAuth, $SMTPSecure, $Host, $Port, $Username, $Password, $From, $FromName);
                $mail->correoPassword($email, $combos);
                if ($mail->Send()) {
                    return true;
                }else{
                    return false;
                }
            }

            $forgotPassword = Login::login();
            $restablecer = $forgotPassword->forgotPassword($email);
            $combos = $restablecer;

            !$combos ? false : correoPassword($email, $combos);


        break;

        case 'mailDuplicity':        

            $duplicityControl = Login::login();
            $mailDuplicity = $duplicityControl->mailDuplicity($email);
            $combos = $mailDuplicity;

        break;

       

    }

        





if($error){
    $response = array('success' => false, 'error' => $error['message'].' '.$error['sqltext']);
    echo json_encode($response);
}
else{
    $response = array('success' => true, 'combos' => $combos, 'datos_correo' => $datos_correo, 'code' => $code);
    echo json_encode($response);
}

}