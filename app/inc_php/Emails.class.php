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

}
