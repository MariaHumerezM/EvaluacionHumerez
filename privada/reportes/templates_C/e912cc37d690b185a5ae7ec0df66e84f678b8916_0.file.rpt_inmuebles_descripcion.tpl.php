<?php
/* Smarty version 3.1.36, created on 2021-07-30 23:35:47
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\rpt_inmuebles_descripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61048cd3cb3100_79487594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e912cc37d690b185a5ae7ec0df66e84f678b8916' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\rpt_inmuebles_descripcion.tpl',
      1 => 1627688112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61048cd3cb3100_79487594 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
	 function validar(){
	 	descripcion = document.formu.descripcion.value;
	 	if (document.formu.descripcion.value =="") {
	 		alert("Por favor seleccione el Bloque");
	 		document.formu.descripcion.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_inmuebles_descripcion1.php?descripcion=" + descripcion , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INMUEBLES POR DESCRPCION</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione el bloque</b>
		  <select name="descripcion">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value="BLOQUE A">BLOQUE A</option>
		  	<option value="BLOQUE B">BLOQUE B</option>
		  	<option value="BLOQUE C">BLOQUE C</option>
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
