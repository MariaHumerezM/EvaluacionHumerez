<?php
/* Smarty version 3.1.36, created on 2021-05-13 02:43:04
  from 'C:\wamp64\www\sis_constructora\privada\clientes_trabajos\templates\cliente_trabajo_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609c9238ce1295_65983021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1cdf99fe83939985eb50d23fe210ebae60beb3c' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\clientes_trabajos\\templates\\cliente_trabajo_modificar.tpl',
      1 => 1619744462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c9238ce1295_65983021 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_cliente_trabajo.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="cliente_trabajo_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR EL TRABAJO DEL CLIENTE</h2>
				<b>Cliente (*)</b><br>
					<select name="id_cliente">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cliente']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
					 <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
					 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
					 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cliente_trabajo']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<p>
				<input type="text" name="lugar" size="15" placeholder="Lugar" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['lugar'];?>
">(*)
			</p>
			<p>
				<input type="text" name="fecha_inicio" size="15" placeholder="Fecha inicio" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_inicio'];?>
">(*)
			</p>
			<p>
				<input type="text" name="salario" size="15" placeholder="salario" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_cliente_trabajo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
">
				<input type="button" value ="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value ="Cancelar" onclick="javascript:location.href='clientes_trabajos.php';" class="boton2">
			</p>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html><?php }
}
