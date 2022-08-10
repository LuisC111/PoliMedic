<?php
/* Smarty version 4.1.1, created on 2022-05-28 04:30:49
  from 'C:\xampp\htdocs\testSofttek\app\templates\modulo\moduloCrud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6291895947ccc8_20400323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2aa7f0398a059a75c2a40573f9d15e6f62171d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testSofttek\\app\\templates\\modulo\\moduloCrud.tpl',
      1 => 1653705048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291895947ccc8_20400323 (Smarty_Internal_Template $_smarty_tpl) {
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
datable.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['AUX_CSS']->value;?>
datatables_v1.12/jquery.dataTables.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['AUX_CSS']->value;?>
tailwindcss_v2.2/tailwind.min.css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['AUX_FONTS']->value;?>
sourceSansPro/font.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
jquery_v3.6.0/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="container" style="margin:auto;display:block;margin-top:5%;">


    <table id="theTable" class="display" style="width: 100%">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Registro</th>
                <th>Id Rol</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Registro</th>
                <th>Id Rol</th>
            </tr>
        </tfoot>
    </table>

    </div>
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
dropdownList/dropdown.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
datatables_v1.12/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AUX_JS']->value;?>
sweetalert2/sweetalert2.all.min.js"><?php echo '</script'; ?>
>

  
</body>

</html><?php }
}
