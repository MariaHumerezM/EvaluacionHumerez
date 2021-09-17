<?php
/* Smarty version 3.1.36, created on 2021-09-16 20:33:00
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\rpt_inmuebles_dormitorios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143a9fc5a8cb0_10445622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77da5fb4909286d7d98d32c71a88a39fc0b1a1d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\rpt_inmuebles_dormitorios.tpl',
      1 => 1628560616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143a9fc5a8cb0_10445622 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
	 function validar(){
	 	dormitorios = document.formu.dormitorios.value;
	 	if (document.formu.dormitorios.value =="") {
	 		alert("Por favor seleccione el numero de dormitorios");
	 		document.formu.dormitorios.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_inmuebles_dormitorios1.php?dormitorios=" + dormitorios , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INMUEBLES POR NUMERO DE DORMITORIOS</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione el numero de dormitorios</b>
		  <select name="dormitorios">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value="1">1</option>
		  	<option value="2">2</option>
		  	<option value="3">3</option>
		  </select>
		 </p>
		 <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton">
		 </p>
		</form>
	</div>
</body>
</html><?php }
}
