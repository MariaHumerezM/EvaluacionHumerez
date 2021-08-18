<?php
/* Smarty version 3.1.36, created on 2021-07-02 01:22:35
  from 'C:\wamp64\www\sis_constructora\privada\tipos_inmuebles\templates\tipo_inmueble_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60de6a5b6b6156_09918743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1264658fa42d7b2b34f92ecfd79fb193ae2a617e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\tipos_inmuebles\\templates\\tipo_inmueble_nuevo.tpl',
      1 => 1618848559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de6a5b6b6156_09918743 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_tipo_inmueble.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="tipo_inmueble_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR TIPO DE INMUEBLE</h2>
			<p>
			  <input type="text" name="ubicacion" size="15" placeholder="Ubicacion" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="tipo_inmueble" size="15" placeholder="Tipo de Inmueble" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='tipos_inmuebles.php';" class="boton2" >
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
<?php }
}
