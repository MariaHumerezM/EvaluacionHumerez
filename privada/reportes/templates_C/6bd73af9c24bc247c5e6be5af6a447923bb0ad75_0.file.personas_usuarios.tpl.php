<?php
/* Smarty version 3.1.36, created on 2021-05-14 23:31:26
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\personas_usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609f084e4350c9_42629967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd73af9c24bc247c5e6be5af6a447923bb0ad75' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\personas_usuarios.tpl',
      1 => 1621035079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f084e4350c9_42629967 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario= false
			function imprimir(){
				ventanaCalendario = window.open("personas_usuarios1.php", "calendario", "width=600, height= 550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=NO, status=NO, resizable=YES, location=NO")
			}
	<?php echo '</script'; ?>
>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>PERSONAS_USUARIOS</h1></td>
		</tr>
	</table>
	<br>
	
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>PERSONAS</th><th>NOMBRE DE USUARIO</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas_usuarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_1'];?>
</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir</td>
		</h2>
	</center>
</body>
</html>
<?php }
}
