<?php
/* Smarty version 3.1.36, created on 2021-06-15 01:46:55
  from 'C:\wamp64\www\sis_constructora\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c8068f980817_02527127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa6c500efb2e390d60d484991ff486e477949c6b' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\claves\\templates\\index.tpl',
      1 => 1623721603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c8068f980817_02527127 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function refrescar(){
			var p = window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>
</head>
<body ONLOAD ="self.setTimeout('refrescar()',1000);">
	<center>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
		<br>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
	</center>
</body><?php }
}
