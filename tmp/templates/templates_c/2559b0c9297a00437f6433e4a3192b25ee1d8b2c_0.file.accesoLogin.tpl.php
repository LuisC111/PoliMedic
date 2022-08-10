<?php
/* Smarty version 4.1.1, created on 2022-05-28 02:19:45
  from 'C:\xampp\htdocs\testSofttek\app\templates\acceso\accesoLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62916aa1035680_05709658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2559b0c9297a00437f6433e4a3192b25ee1d8b2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testSofttek\\app\\templates\\acceso\\accesoLogin.tpl',
      1 => 1653697154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62916aa1035680_05709658 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['fav']->value;?>
" type="image/x-icon">
    <meta name="description" content="Prueba técnica PHP | Softtek" />
    <meta name="author" content="Luis Carlos Martínez Guzman" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['APP_CSS']->value;?>
accesoLogin.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['AUX_CSS']->value;?>
bootstrap_v5.0.2/bootstrap.min.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
jquery_v3.6.0/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
fontawesome_v6.0/fontawesome.js"><?php echo '</script'; ?>
>
</head>

<body>
    <section class="vh-100 seccionPadre" id="login">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgLogin']->value;?>
"
                      alt="Formulario de login" class="img-fluid img-login" />
                  </div>

                  <div class="col-md-6 col-lg-7 d-flex align-items-center">

                    <div class="card-body p-4 p-lg-5 text-black">
      
                        <form id="frmAccesoLogin" name="frmAccesoLogin" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
" enctype="multipart/form-data" class="px-5 pb-5">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <img class="icono-login" src="<?php echo $_smarty_tpl->tpl_vars['icono']->value;?>
" />
                          <span class="h1 fw-bold mb-0">Softtek</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;color:#1689fc;">Inicia sesión</h5>
                        
                        <div class="form-outline mb-4">
                          <input type="email" id="email" class="form-control form-control-lg" minlength="4" maxlength="100" placeholder="Correo electrónico" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="pass" class="form-control form-control-lg" minlength="4" maxlength="24" placeholder="Contraseña" />
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit" id="btnEntrar">Ingresar</button>
                        </div>

                        <div id="divAlert" class="alert alert-danger" role="alert" style="display:none">
                            <strong>Atención</strong>
                            <br/>
                            <span id="spmError"></span>
                        </div>   
      
                        <p style="color: #393f81;">¿No tienes una cuenta?
                            <a id="btnRegistro" style="color: #1689fc;font-weight: bold;cursor: pointer;"">Registrate aquí</a></p>
                        <a class="small datos alertaDatos" >Tratamiento de datos</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="vh-fluid seccionPadre" id="registro" style="display: none">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgRegistro']->value;?>
"
                      alt="Formulario de login" class="img-fluid img-login" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                        <form id="frmAccesoRegistro" name="frmAccesoRegistro" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
" enctype="multipart/form-data" class="px-5 pb-5">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <img class="icono-login" src="<?php echo $_smarty_tpl->tpl_vars['icono']->value;?>
" />
                          <span class="h1 fw-bold mb-0">Softtek</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;color:#1689fc;">¡Registrate!</h5>

                        <div class="form-outline mb-4">
                          <input type="number" id="cedulaRegistro" class="form-control form-control-lg" minlength="4" maxlength="12" placeholder="Cédula" />
                        </div>

                        <div class="form-outline mb-4">
                          <input type="email" id="nombreRegistro" class="form-control form-control-lg" minlength="4" maxlength="100" placeholder="Nombre(s) Completo" />
                        </div>

                        <div class="form-outline mb-4">
                          <input type="email" id="apellidoRegistro" class="form-control form-control-lg" minlength="4" maxlength="100" placeholder="Apellido(s) Completo" />
                        </div>

      
                        <div class="form-outline mb-4">
                          <input type="email" id="emailRegistro" class="form-control form-control-lg" minlength="4" maxlength="100" placeholder="Correo electrónico" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="passRegistro" class="form-control form-control-lg" minlength="4" maxlength="24" placeholder="Contraseña" />
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button  type="submit" class="btn btn-dark btn-lg btn-block" id="btnRegistrar">Registrarme</button>
                        </div>

                        <div id="divAlert" class="alert alert-danger" role="alert" style="display:none">
                            <strong>Atención</strong>
                            <br/>
                            <span id="spmError"></span>
                        </div>   
      
                        <p style="color: #393f81;">¿Ya tienes una cuenta? 
                            <a id="btnLogin" style="color: #1689fc;font-weight: bold;cursor: pointer;">Inicia sesión aquí</a></p>
                        <a class="small datos alertaDatos" >Tratamiento de datos</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['APP_JS']->value;?>
accesoLogin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
bootstrap_v5.0.2/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
sweetalert2/sweetalert2.all.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
