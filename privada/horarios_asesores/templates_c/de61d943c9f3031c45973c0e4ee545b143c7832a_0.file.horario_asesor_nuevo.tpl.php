<?php
/* Smarty version 3.1.36, created on 2021-06-17 23:30:37
  from 'C:\wamp64\www\sis_constructora\privada\horarios_asesores\templates\horario_asesor_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cbdb1d1b3739_75581524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de61d943c9f3031c45973c0e4ee545b143c7832a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\horarios_asesores\\templates\\horario_asesor_nuevo.tpl',
      1 => 1618924370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cbdb1d1b3739_75581524 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_horario_asesor.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="horario_asesor_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR HORARIO DEL ASESOR</h2>
				<b>ASESORES (*)</b>
					<select name="id_asesor">
					 <option value="">---- seleccione ----</option>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asesores']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_asesor'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
					 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
			<p>
				<input type="text" name="hora_entrada" size="15" placeholder="Hora entrada" >(*)
			</p>
			<p>
				<input type="text" name="hora_salida" size="15" placeholder="Hora salida" >(*)
			</p>
			<p>
				<input type="text" name="dias" size="15" placeholder="Dias" >(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='horarios_asesores.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>
<?php }
}
