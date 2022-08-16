<?php

require PHPMAILER_DIR . "class.phpmailer.php";
require PHPMAILER_DIR . "class.smtp.php";

class Emails extends PHPMailer{    
    
    function __construct() {
       parent::__construct();    
    }    
    
    public function parametrizarCorreo($SMTPDebug, $SMTPAuth, $SMTPSecure, $Host, $Port, $Username, $Password, $From, $FromName){
        $this->SetLanguage('es');
        $this->IsSMTP();
        $this->SMTPDebug        = '0';
        $this->SMTPAuth         = true;
        $this->SMTPSecure       = 'tls';
        $this->Host             = 'smtp.gmail.com';
        $this->Port             = '587';
        $this->Username         = 'ugcpruebas@gmail.com';  
        $this->Password         = 'aisjxwfnfqrrneji';
        $this->From             = 'no-reply@polimedic.com';
        $this->FromName         = utf8_encode('PoliMedic | Gestiona tu Salud');                  
    }
    
    public function correo($email, $user, $code){       
        $htmlCuerpo =  "
        <!DOCTYPE html>
        <html>
        
        <head>
            <meta charset='utf-8' />
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' rel='stylesheet'>
            <style type='text/css'>
                * {
                    box-sizing: border-box;
                }
                
                body {
                    font-family: 'Raleway';
                    background-color: #e6e6e6;
                }
                
                .card {
                    border-top: 1px solid #e6e6e6;
                    width: 400px;
                    margin: 0 auto;
                    background-color: #fff;
                    box-shadow: 0 3px 30px rgba(0, 0, 0, .14);
                    color: #444;
                    text-align: center;
                    font-size: 16px;
                }
                
                .card .card-header {
                    position: relative;
                    height: 48px;
                }
                
                .card .card-header .profile-img {
                    width: 96px;
                    height: 100px;
                    border-radius: 1000px;
                    position: absolute;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    border: 6px solid #fff;
                    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
                    margin-bottom: 20px;
                }
                
                .card .card-body {
                    padding: 45px 40px;
                }
                
                .card .card-body .full-name {
                    font-size: 20px;
                    font-weight: 600;
                    text-transform: uppercase;
                    margin: 10px 0 0;
                }
                
                .card .card-body .username {
                    font-size: 13px;
                    color: #777;
                    margin: 5px 0 0;
                }
                
                .card .card-body .city {
                    font-weight: 500;
                    margin: 10px 0 0;
                }
                
                .card .card-body .desc {
                    line-height: 24px;
                }
                
                .card .social-icon {
                    font-size: 18px;
                    margin: 0 7px;
                }
                
                .card .card-footer {
                    display: table;
                    width: 100%;
                    border-top: 1px solid #e6e6e6;
                }
                
                .card .card-footer .col {
                    display: table-cell;
                    padding: 5px 10px;
                    font-size: 15px;
                }
                
                .card .card-footer .count {
                    font-size: 18px;
                    font-weight: 600;
                    color: blue;
                    text-decoration: none;
                }
                
                .vr {
                    border-right: 1px solid #e6e6e6;
                }
                
                @media screen and (max-width: 575px) {
                    .card {
                        width: 96%;
                    }
                    .card .card-body {
                        padding: 35px 20px;
                    }
                    .card .card-footer .col {
                        padding: 0 10px;
                    }
                    .card .card-footer .count {
                        display: block;
                        margin-bottom: 5px;
                    }
                }
            </style>
        </head>
        
        <body>
        
            <div class='card'>
                <h2 style='margin-bottom: 30px;color: #27326B;'>Verificación de usuarios</h2>
                <div class='card-header'>
                    <img src='https://i.imgur.com/DINdxbs.png' alt='PoliMedic' class='profile-img'>
                </div>
                <div class='card-body'>
                    <p class='full-name'>Código de verificación: ".$code."</p>
                    <p class='username'>Ingresa este código para verificar tu cuenta.</p>
                    <p class='city'>Nombre de usuario: <b>".$user."</b></p>
                    <p class='desc'>¡No borres este mensaje ya que es de suma importancia para recordar tu nombre de usuario en caso de que lo olvides!</p>
                </div>
                <div class='card-footer'>
                    <div class='col'>
                        <p><span class='count'><a href='https://polimedic.test/' style='color: #27326B;
                            text-decoration: none;'>".$user."</a></span></p>
                    </div>
        
                </div>
            </div>
        </body>
        
        </html>
        ";
        $this->Subject = utf8_decode("PoliMedic | Verificación de usuario");	
        $this->AltBody = $htmlCuerpo;
        $this->WordWrap = 80; // set word wrap
        $this->MsgHTML($this->AltBody);
        $this->AddAddress($email, 'PoliMedic | Users');
        $this->IsHTML(true); // send as HTML

    }

    public function correoPassword($email, $combos){
        $htmlCuerpo =  '
        <!DOCTYPE html>

        <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css"/>
        <style>
                * {
                    box-sizing: border-box;
                }
        
                body {
                    margin: 0;
                    padding: 0;
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important;
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0px;
                    overflow: hidden;
                }
        
                @media (max-width:620px) {
                    .desktop_hide table.icons-inner {
                        display: inline-block !important;
                    }
        
                    .icons-inner {
                        text-align: center;
                    }
        
                    .icons-inner td {
                        margin: 0 auto;
                    }
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important;
                    }
        
                    .mobile_hide {
                        display: none;
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block;
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0px;
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important;
                    }
                }
            </style>
        </head>
        <body style="background-color: #d9dffa; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
        <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa;" width="100%">
        <tbody>
        <tr>
        <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #cfd6f4;" width="100%">
        <tbody>
        <tr>
        <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;" width="600">
        <tbody>
        <tr>
        <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 20px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
        <tr>
        <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
        <div align="center" class="alignment" style="line-height:10px"><img alt="Card Header with Border and Shadow Animated" class="big" src="https://i.imgur.com/H1fxOjq.gif" style="display: block; height: auto; border: 0; width: 600px; max-width: 100%;" title="Card Header with Border and Shadow Animated" width="600"/></div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa; background-image: url(https://i.imgur.com/XBIBg2X.png); background-position: top center; background-repeat: repeat;" width="100%">
        <tbody>
        <tr>
        <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;" width="600">
        <tbody>
        <tr>
        <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 50px; padding-right: 50px; vertical-align: top; padding-top: 15px; padding-bottom: 15px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
        <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
        <tr>
        <td class="pad">
        <div style="font-family: sans-serif">
        <div class="txtTinyMce-wrapper" style="font-size: 14px; mso-line-height-alt: 16.8px; color: #506bec; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
        <p style="margin: 0; font-size: 14px;"><strong><span style="font-size:38px;">¿Olvidaste tu contraseña?</span></strong></p>
        </div>
        </div>
        </td>
        </tr>
        </table>
        <table border="0" cellpadding="10" cellspacing="0" class="text_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
        <tr>
        <td class="pad">
        <div style="font-family: sans-serif">
        <div class="txtTinyMce-wrapper" style="font-size: 14px; mso-line-height-alt: 16.8px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
        <p style="margin: 0; font-size: 14px;"><span style="font-size:16px;">¡Hola!, has recibido este correo porque solicitaste restablecer tu contraseña. Si no solicitaste este cambio has caso omiso a este correo.</span></p>
        </div>
        </div>
        </td>
        </tr>
        </table>
        <table border="0" cellpadding="10" cellspacing="0" class="text_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
        <tr>
        <td class="pad">
        <div style="font-family: sans-serif">
        <div class="txtTinyMce-wrapper" style="font-size: 14px; mso-line-height-alt: 16.8px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
        <p style="margin: 0; font-size: 14px;"><span style="font-size:16px;">Tu contraseña temporal de acceso es: <span style="font-size:20px;"><strong>'.$combos.'</strong></span></span></p>
        <p style="margin: 0; font-size: 14px;"><span style="font-size:16px;">Inicia sesión para cambiarla.</span></p>
        </div>
        </div>
        </td>
        </tr>
        </table>
        <table border="0" cellpadding="20" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
        <tr>
        <td class="pad">
        <div align="left" class="alignment">
        <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://www.example.com/" style="height:46px;width:140px;v-text-anchor:middle;" arcsize="35%" stroke="false" fillcolor="#506bec"><w:anchorlock/><v:textbox inset="5px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:15px"><![endif]--><a href="polimedic.test/acceso/accesoLogin" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#506bec;border-radius:16px;width:auto;border-top:0px solid TRANSPARENT;font-weight:400;border-right:0px solid TRANSPARENT;border-bottom:0px solid TRANSPARENT;border-left:0px solid TRANSPARENT;padding-top:8px;padding-bottom:8px;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:25px;padding-right:20px;font-size:15px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word;"><span data-mce-style="" dir="ltr" style="line-height: 30px;"><strong>Iniciar sesión</strong></span></span></span></a>
        <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
        </div>
        </td>
        </tr>
        </table>
        <table border="0" cellpadding="10" cellspacing="0" class="text_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
        <tr>
        <td class="pad">
        <div style="font-family: sans-serif">
        <div class="txtTinyMce-wrapper" style="font-size: 14px; mso-line-height-alt: 16.8px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
        <p style="margin: 0; font-size: 14px;"><span style="font-size:14px;">¿Tienes problemas? <a href="http://www.example.com/" rel="noopener" style="text-decoration: none; color: #40507a;" target="_blank" title="@socialaccount"><strong>ugcpruebas@gmail.com</strong></a></span></p>
        </div>
        </div>
        </td>
        </tr>
        </table>
        <table border="0" cellpadding="10" cellspacing="0" class="text_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
        <tr>
        <td class="pad">
        <div style="font-family: sans-serif">
        <div class="txtTinyMce-wrapper" style="font-size: 14px; mso-line-height-alt: 16.8px; color: #40507a; line-height: 1.2; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
        <p style="margin: 0; font-size: 14px;">¿No solicitaste este cambio? Si no solicitaste este cambio puedes hacer caso omiso e ignorar este correo.</p>
        </div>
        </div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
        <tbody>
        <tr>
        <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;" width="600">
        <tbody>
        <tr>
        <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
        <tr>
        <br><br><br><br>
        </tr>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table><!-- End -->
        </body>
        </html>
        ';

        $this->Subject = utf8_decode("PoliMedic | Restablece tu contraseña");	
        $this->AltBody = utf8_decode($htmlCuerpo);        
        $this->WordWrap = 80; // set word wrap
        $this->MsgHTML($this->AltBody);
        $this->AddAddress($email, 'PoliMedic | Users');
        $this->IsHTML(true); // send as HTML

    }

    public function correoMember($email, $userMember, $passMember){       
        $htmlCuerpo =  "
        <!DOCTYPE html>
        <html>
        
        <head>
            <meta charset='utf-8' />
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' rel='stylesheet'>
            <style type='text/css'>
                * {
                    box-sizing: border-box;
                }
                
                body {
                    font-family: 'Raleway';
                    background-color: #e6e6e6;
                }
                
                .card {
                    border-top: 1px solid #e6e6e6;
                    width: 400px;
                    margin: 0 auto;
                    background-color: #fff;
                    box-shadow: 0 3px 30px rgba(0, 0, 0, .14);
                    color: #444;
                    text-align: center;
                    font-size: 16px;
                }
                
                .card .card-header {
                    position: relative;
                    height: 48px;
                }
                
                .card .card-header .profile-img {
                    width: 96px;
                    height: 100px;
                    border-radius: 1000px;
                    position: absolute;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    border: 6px solid #fff;
                    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
                    margin-bottom: 20px;
                }
                
                .card .card-body {
                    padding: 45px 40px;
                }
                
                .card .card-body .full-name {
                    font-size: 20px;
                    font-weight: 600;
                    margin: 10px 0 0;
                }
                
                .card .card-body .username {
                    font-size: 13px;
                    color: #777;
                    margin: 5px 0 0;
                }
                
                .card .card-body .city {
                    font-weight: 500;
                    margin: 10px 0 0;
                }
                
                .card .card-body .desc {
                    line-height: 24px;
                }
                
                .card .social-icon {
                    font-size: 18px;
                    margin: 0 7px;
                }
                
                .card .card-footer {
                    display: table;
                    width: 100%;
                    border-top: 1px solid #e6e6e6;
                }
                
                .card .card-footer .col {
                    display: table-cell;
                    padding: 5px 10px;
                    font-size: 15px;
                }
                
                .card .card-footer .count {
                    font-size: 18px;
                    font-weight: 600;
                    color: blue;
                    text-decoration: none;
                }
                
                .vr {
                    border-right: 1px solid #e6e6e6;
                }
                
                @media screen and (max-width: 575px) {
                    .card {
                        width: 96%;
                    }
                    .card .card-body {
                        padding: 35px 20px;
                    }
                    .card .card-footer .col {
                        padding: 0 10px;
                    }
                    .card .card-footer .count {
                        display: block;
                        margin-bottom: 5px;
                    }
                }
            </style>
        </head>
        
        <body>
        
            <div class='card'>
                <h2 style='margin-bottom: 30px;color: #27326B;'>Verificación de usuarios</h2>
                <div class='card-header'>
                    <img src='https://i.imgur.com/DINdxbs.png' alt='PoliMedic' class='profile-img'>
                </div>
                <div class='card-body'>
                    <p class='full-name'>Contraseña temporal: ".$passMember."</p>
                    <p class='username'>Ingresa con esta contraseña para acceder a tu cuenta.</p>
                    <p class='city'>Nombre de usuario: <b>".$userMember."</b></p>
                    <p class='desc'>¡No borres este mensaje ya que es de suma importancia para recordar tu nombre de usuario en caso de que lo olvides!</p>
                </div>
                <div class='card-footer'>
                    <div class='col'>
                        <p><span class='count'><a href='https://polimedic.test/' style='color: #27326B;
                            text-decoration: none;'>".$userMember."</a></span></p>
                    </div>
        
                </div>
            </div>
        </body>
        
        </html>
        ";
        $this->Subject = utf8_decode("PoliMedic | Verificación de usuario");	
        $this->AltBody = $htmlCuerpo;
        $this->WordWrap = 80; // set word wrap
        $this->MsgHTML($this->AltBody);
        $this->AddAddress($email, 'PoliMedic | Users');
        $this->IsHTML(true); // send as HTML

    }

}
