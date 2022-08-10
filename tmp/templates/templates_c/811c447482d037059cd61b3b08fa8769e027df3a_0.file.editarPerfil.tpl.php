<?php
/* Smarty version 4.1.1, created on 2022-05-28 03:09:51
  from 'C:\xampp\htdocs\testSofttek\app\templates\modulo\editarPerfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6291765f6e8ec2_27336388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811c447482d037059cd61b3b08fa8769e027df3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testSofttek\\app\\templates\\modulo\\editarPerfil.tpl',
      1 => 1653700189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291765f6e8ec2_27336388 (Smarty_Internal_Template $_smarty_tpl) {
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
editarPerfil.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['AUX_CSS']->value;?>
bootstrap_v5.0.2/bootstrap.min.css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['AUX_FONTS']->value;?>
sourceSansPro/font.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
jquery_v3.6.0/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
</head>
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="modulo.php">Panel de usuarios</a></li>
              <li class="breadcrumb-item active" aria-current="page">Editar perfil</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" alt="user"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3"><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
</h5>
              <p class="text-muted mb-1"><?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
</p>
              <p class="text-muted mb-4"><?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
</p>
            </div>
          </div>
         
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Cedula</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="cedula" id="cedula" value="<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
"/>
                    </div>
                  </div>
                  <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nombre(s)</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name="nombre" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"/>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Apellido(s)</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="apellido" id="apellido" value ="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
"/>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Correo</p>
                </div>
                <div class="col-sm-9">
                    <input type="email" name="correo" id="correo" value="<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
"/>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Contraseña</p>
                </div>
                <div class="col-sm-9">
                    <input type="password" name="pass" id="pass"/>
                </div>
              </div>
              <hr>

              <button class="btn btn-primary float-right" id="btnEditar">Actualizar Datos</button>
              
            </div>
          </div>
        
             
  </section>


    

  
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['APP_JS']->value;?>
panelUsuario.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['APP_JS']->value;?>
acceso.js"><?php echo '</script'; ?>
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
