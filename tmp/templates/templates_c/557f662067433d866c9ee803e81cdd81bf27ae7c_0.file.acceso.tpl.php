<?php
/* Smarty version 4.1.1, created on 2022-08-22 00:16:57
  from 'C:\laragon\www\PoliMedic\app\templates\acceso\acceso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6302caf93ef5e9_98790816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557f662067433d866c9ee803e81cdd81bf27ae7c' => 
    array (
      0 => 'C:\\laragon\\www\\PoliMedic\\app\\templates\\acceso\\acceso.tpl',
      1 => 1661127416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6302caf93ef5e9_98790816 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

    </title>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['fav']->value;?>
" type="image/x-icon">
    <meta name="description" content="PoliMedic" />
    <meta name="author" content="SubGrupo-07" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['APP_CSS']->value;?>
owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['APP_CSS']->value;?>
owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['APP_CSS']->value;?>
templatemo-medic-care.css?v=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">

</head>

<body>
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['bannerImg1']->value;?>
" class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['bannerImg2']->value;?>
" class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['bannerImg3']->value;?>
" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">Nuestro Enfoque</h2>

                    <p>Desarrollar una herramienta eficaz y de calidad, que permita facilitar el manejo de información,
                        de forma efectiva para agilizar y tener control de los datos suministrados tanto por el
                        responsable de la familia como por el grupo familiar.
                    </p>

                </div>

                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span class="featured-number">#1</span> Top<br> gestionando tu salud.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="section-padding pb-0" id="reviews">
        <div class="container">
            <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3">
                            <div>
                                <div class="cuadrarTab ">
                                    <div>
                                        <img style="width: 300px;" src="<?php echo $_smarty_tpl->tpl_vars['bannerImgLaboratorio']->value;?>
" alt="">
                                    </div>
                                    <div>
                                        <p class="margLadoIsqui"> Laboratorio </p>
                                    </div>
                                </div>
                                <div class="cuadrarTab2">
                                    <div>
                                        <p class="margLadoDere"> Medicina General </p>
                                    </div>
                                    <div>
                                        <img style="width: 300px;" src="<?php echo $_smarty_tpl->tpl_vars['bannerImgMedicinaGe']->value;?>
" alt="">
                                    </div>
                                </div>
                                <div class="cuadrarTab">
                                    <div>
                                        <img style="width: 300px;" src="<?php echo $_smarty_tpl->tpl_vars['bannerImgSeguiSalud']->value;?>
" alt="">
                                    </div>
                                    <div>
                                        <p class="margLadoIsqui2"> Seguimiento y Controles de Salud </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 " style="margin-left: 23px;">
                            <div class="margTopBaja">
                                <div class="cuadrarTab ">
                                    <div>
                                        <img style="width: 300px;" src="<?php echo $_smarty_tpl->tpl_vars['bannerImgRadio']->value;?>
" alt="">
                                    </div>
                                    <div>
                                        <p class="margLadoIsqui"> Radiografia </p>
                                    </div>
                                </div>
                                <div class="cuadrarTab2">
                                    <div>
                                        <p class="margLadoDere"> Controles Medicos </p>
                                    </div>
                                    <div>
                                        <img style="width: 300px;" src="<?php echo $_smarty_tpl->tpl_vars['bannerImgControles']->value;?>
" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-lg-3 mb-2">Contáctanos</h2>
                        <p class="text-center">¿Tienes dudas, peticiones quejas o recursos?. Tu opinión es muy
                            importante para nosotros, por ello en el momento que lo desees puedes hacer clic en ¡Enviar!
                            en donde accederas a un formato de correo electrónico para contactarnos, nuetros usuarios
                            son la prioridad número 1 de <span class="text-primary">PoliMedic</span> y por eso te
                            atenderemos en cuestión de minutos. </p>
                        <div class="row">
                            <div class="col-lg-3 mt-4 text-center" d-block style="margin:auto;">
                                <button type="submit" class="glow-on-hover" type="button"
                                    id="submit-button">¡Enviar!</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    </main>

    <?php echo '<script'; ?>
>
        const buttonContact = document.getElementById("submit-button");

        buttonContact.onclick = function() {
            window.open('mailto:luisomg111@gmail.com?subject=subject&body=body');
        };
    <?php echo '</script'; ?>
>




</body>

</html><?php }
}
