<?php
/* Smarty version 3.1.36, created on 2021-09-17 01:49:36
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\rpt_inmuebles_superficies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143f4302b6b52_29979178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e50c610eba50e6b00f3fa3b3dc2903f3bf0c8fec' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\rpt_inmuebles_superficies.tpl',
      1 => 1631842238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143f4302b6b52_29979178 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
	 function validar(){
	 	superficies = document.formu.superficies.value;
	 	if (document.formu.superficies.value =="") {
	 		alert("Por favor seleccione la superficie");
	 		document.formu.superficies.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_inmuebles_superficies1.php?superficies=" + superficies , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INMUEBLES POR SUPERFICIES</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione la superficie</b>
		  <select name="superficies">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value="60MTS2">60 MTS2</option>
		  	<option value="80MTS2">80 MTS2</option>
		  	<option value="100MTS2">100 MTS2</option>
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
