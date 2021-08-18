<?php
/* Smarty version 3.1.36, created on 2021-04-28 22:01:42
  from 'C:\wamp64\www\sis_carpinteria\privada\personas\templates\persona_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6089db4697ed14_20366647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '593d5e34a7cd21652d992b349b348611d30d4418' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\personas\\templates\\persona_modificar.tpl',
      1 => 1619632122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6089db4697ed14_20366647 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_persona.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="persona_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR PERSONA</h2>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			  <input type="text" name="ci" size="15" placeholder="Carnet de Identidad" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
">(*)
			<p>
			  <input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="ap" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="am" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
">(*)
			</p>
			<p>
			  <input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
">
			</p>
			<p>
			  <input type="text" name="telefono" size="15" placeholder="Telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
">
			</p>
			<p>
			  (*)<b>Genero</b> 
			  <input type="radio" name="genero" value="F" <?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == "F") {?> checked <?php }?>>Femenino
			  <input type="radio" name="genero" value="M" <?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == "M") {?> checked <?php }?>>Masculino
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='personas.php';" class="boton2" >
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
