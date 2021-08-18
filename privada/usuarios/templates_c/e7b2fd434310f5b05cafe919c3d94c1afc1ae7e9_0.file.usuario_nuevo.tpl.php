<?php
/* Smarty version 3.1.36, created on 2021-05-13 02:54:52
  from 'C:\wamp64\www\sis_constructora\privada\usuarios\templates\usuario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609c94fc62f651_28702247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b2fd434310f5b05cafe919c3d94c1afc1ae7e9' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\usuarios\\templates\\usuario_nuevo.tpl',
      1 => 1618848745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c94fc62f651_28702247 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="usuario_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR USUARIO</h2>
				<b>Persona (*)</b>
					<select name="id_persona">
					 <option value="">---- seleccione ----</option>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
					 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
			<p>
				<input type="text" name="usuario" size="15" placeholder="Usario" >(*)
			</p>
			<p>
			  <input type="password" name="clave" size="15" placeholder="Clave" >(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>
<?php }
}
