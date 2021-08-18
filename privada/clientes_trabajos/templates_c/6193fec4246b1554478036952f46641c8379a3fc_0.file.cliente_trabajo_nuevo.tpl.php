<?php
/* Smarty version 3.1.36, created on 2021-05-13 02:56:52
  from 'C:\wamp64\www\sis_constructora\privada\clientes_trabajos\templates\cliente_trabajo_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609c95744ac055_55576110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6193fec4246b1554478036952f46641c8379a3fc' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\clientes_trabajos\\templates\\cliente_trabajo_nuevo.tpl',
      1 => 1619706982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c95744ac055_55576110 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form action="cliente_trabajo_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR EL TRABAJO DEL CLIENTE</h2>
				<b>CLIENTES (*)</b><br>
					<select name="id_cliente">
					 <option value="">---- seleccione ----</option>
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
			<p>
				<input type="text" name="lugar" size="15" placeholder="Lugar" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="text" name="fecha_inicio" size="15" placeholder="Fecha inicio" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="text" name="salario" size="15" placeholder="salario" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='clientes_trabajos.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>
<?php }
}
