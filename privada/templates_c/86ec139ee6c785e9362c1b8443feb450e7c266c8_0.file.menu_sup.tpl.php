<?php
/* Smarty version 3.1.36, created on 2021-09-16 20:32:24
  from 'C:\wamp64\www\sis_constructora\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143a9d859bea5_26723938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ec139ee6c785e9362c1b8443feb450e7c266c8' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\templates\\menu_sup.tpl',
      1 => 1617069522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143a9d859bea5_26723938 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
</head>
<body>


	<div class="cabecera">
	<img src="constructora/logos/<?php echo $_smarty_tpl->tpl_vars['logo_constructora']->value;?>
" width="10%" >
	<div class="titulo">
		CONSTRUCTORA "<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
	</div>
	<div class="usuario">
	Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
	  Rol: <b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
	</div>
	</div>
</body>
</html>
<?php }
}
