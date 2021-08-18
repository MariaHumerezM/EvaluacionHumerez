<?php
/* Smarty version 3.1.36, created on 2021-05-13 02:56:22
  from 'C:\wamp64\www\sis_constructora\privada\asistente_comercial\templates\asistente_comercial_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609c9556c978f2_10992638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ecd54d90b3c413916c7051bef12350788c07ffb' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\asistente_comercial\\templates\\asistente_comercial_modificar.tpl',
      1 => 1619664747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c9556c978f2_10992638 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_asistente_comercial.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="asistente_comercial_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR ASISTENTE COMERCIAL</h2>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asistente_comercial']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			  <input type="text" name="nombres" size="15" placeholder="Nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
">(*)
			<p>
			  <input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="fecha_inicio" size="15" placeholder="Fecha_inicio" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_inicio'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="fecha_fin" size="15" placeholder="Fecha_fin" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_fin'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="telefono" size="15" placeholder="Telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="profesion" size="15" placeholder="Profesion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['profesion'];?>
">
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_asistente_comercial" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_asistente_comercial'];?>
">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='asistente_comercial.php';" class="boton2" >
			</p>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
<?php }
}
