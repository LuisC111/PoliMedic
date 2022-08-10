<?php
/* Smarty version 4.1.1, created on 2022-05-27 16:01:51
  from 'C:\xampp\htdocs\pruebaSofttek\app\templates\acceso\accesoLDAP.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6290d9cfbc2539_09134165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7ef4d04f51623423b1045cc8760019f05a4f77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pruebaSofttek\\app\\templates\\acceso\\accesoLDAP.tpl',
      1 => 1653608712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6290d9cfbc2539_09134165 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
         <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
">
        <?php echo '<script'; ?>
 src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['APP_CSS']->value;?>
accesoUGC.css"/>
        <?php echo '<script'; ?>
 type="text/javascript" language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
jQuery_v3.2/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['AUX_CSS']->value;?>
bootstrap_v5.0.2/css/bootstrap.min.css"/>
        <?php echo '<script'; ?>
 type="text/javascript" language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['APP_JS']->value;?>
acceso/accesoLDAP.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
bootstrap_v5.0.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
swal_v2.0/js/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['APP_CSS']->value;?>
accesoUGC.css"/>
    </head>
    <body>

<div id="modal-habeas" class="modal fade" tabindex="-1" role="dialog">
                            <br><br>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button id="btnModalCerrar" type="button" class="btn btn-danger close btnModalNo" data-dismiss="modal">X</button>
                                    <h3>TERMINOS - HABEAS DATA</h3>
                                </div>
                                <div class="modal-body">
                                  <p align="justify">
                                    <label>
                                      El ESTUDIANTE autoriza de manera libre, previa, expresa, voluntaria y debidamente informada a todas las dependencias académicas y/o administrativas, recolectar, recaudar, almacenar, usar, circular, suprimir, procesar, compilar, intercambiar, dar tratamiento, actualizar, transferir y disponer de los datos que han sido suministrados y que se han incorporado en diferentes bancos de datos o en repositorios electrónicos de todo tipo, propios de la Universidad.
                                      Esta información es y será usada en el desarrollo de las funciones propias de la Universidad en su condición de institución de educación superior, de forma directa o a través de terceros. En todo caso, el tratamiento de los datos personales del ESTUDIANTE está sujeto a la protección establecida en la Ley 1581 de 2012, sus decretos reglamentarios y las normas que los modifiquen.
                                    </label>
                                  </p>
                                </div>
                                <div class="modal-footer">
                                    <button id="btnModalNo" type="button" class="btn btn-danger btnModalNo" data-dismiss="modal">No Acepto Terminos</button>
                                    <button id="btnModalSi" type="button" class="btn btn-success" data-dismiss="modal">Acepto Terminos</button>
                                </div>
                            </div>
                        </div>
                    </div>             
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar" href="<?php echo $_smarty_tpl->tpl_vars['ugc']->value;?>
"><img class="img" src="<?php echo $_smarty_tpl->tpl_vars['imagenNav']->value;?>
" alt="..." width="200px" height="70px"/></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper">Impresiones En Plotér</span>
                <span class="site-heading-upper">Universidad La Gran Colombia</span>
            </h1>
        </header>

        
        <!-- Navigation-->
        
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="https://wwwp.ugc.edu.co/sede/bogota/pages_pruebas---/SolicitudesImpresiones/app/imagenes/arquitectura.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <form id="frmAccesoLDAP" name="frmAccesoLDAP" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="codPrograma" name="codPrograma" value ="<?php echo $_smarty_tpl->tpl_vars['programa']->value;?>
">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtIdUsuario" class="control-label etiqueta-acceso" style="color:#fff">Identificación de usuario</label>
                                            <input type="text" class="form-control" id="txtIdUsuario" name="txtIdUsuario" maxlength="50" placeholder="Usuario Servicios UGC" autocomplete="on" required>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwdContrasenaUsuario" class="control-label etiqueta-acceso"style="color:#fff">Contraseña de usuario</label>
                                            <input type="password" class="form-control" id="pwdContrasenaUsuario" name="pwdContrasenaUsuario" maxlength="50" placeholder="Contraseña Servicios UGC" autocomplete="on" required>
                                            <span class="help-block"></span>
                                        </div>
                                          <?php if ($_smarty_tpl->tpl_vars['errorLDAP']->value) {?>
                                            <div id="divAlert" class="alert alert-danger" role="alert">
                                                <strong>Atención</strong>
                                                <br/>
                                                <span id="spmError"><?php echo $_smarty_tpl->tpl_vars['errorLDAP']->value;?>
</span>
                                            </div>
                                        <?php } else { ?>
                                            
                                        <?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['inputTipo']->value;?>

                                        <div class="button">
                                         <!---<input type="submit" id="btnIngresar" name="btnIngresar" class="btn btn-success" value="Ingresar"><br>--->
                                        </div>
                                        <a href="https://wwwp.ugc.edu.co/sede/bogota/pages/restablecer/acceso/accesoPreguntas.php" target="_blank" style="color:#fff">¿Olvido su contraseña?</a>        
                                        <div class="intro-button mx-auto"><input type="submit" id="btnIngresar" name="btnIngresar" class="btn btn-success btn-xl text-uppercase" value="INGRESAR"></div>           
                                    </form>
                                   
                    </div>
                    
                </div>
            </div>
        </section>
        
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start" style="color:#fff";>Copyright &copy;<a href ="<?php echo $_smarty_tpl->tpl_vars['ugc']->value;?>
"target="_blank"  >Universidad La Gran Colombia 2022</a></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none" style="color:#fff"href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" target="_blank">Politica de tratamiento de datos</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
     
</html>
<?php }
}
