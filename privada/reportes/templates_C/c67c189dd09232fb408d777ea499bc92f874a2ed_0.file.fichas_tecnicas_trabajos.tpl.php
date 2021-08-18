<?php
/* Smarty version 3.1.36, created on 2021-08-10 01:55:43
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\fichas_tecnicas_trabajos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111dc9f203179_53927018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c67c189dd09232fb408d777ea499bc92f874a2ed' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\fichas_tecnicas_trabajos.tpl',
      1 => 1628226250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111dc9f203179_53927018 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	  function buscar() {
	  var d1, d2, d3, contenedor, ajax, url, param;
	    contenedor = document.getElementById('trabajos1');
	    d1 = document.formu.lugar.value;
	    d2 = document.formu.fecha_inicio.value;
	    d3 = document.formu.salario.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_trabajo.php"
	    param = "lugar="+d1+"&fecha_inicio="+d2+"&salario="+d3;
	    //alert(param);
	    ajax.open("POST", url, true);
	    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    ajax.onreadystatechange = function() {
	    	if (ajax.readyState == 3) {
	    		contenedor.innerHTML = ajax.responseText;
	    	}
	    }
	    ajax.send(param);
	  }

	  function mostrar(id_cliente_trabajo) {
	  var d1, ventanaCalendario;
	  d1 = id_cliente_trabajo;
	  //alert(id_cliente_trabajo);
	  ventanaCalendario = window.open("fichas_tecnicas_trabajos1.php?id_cliente_trabajo=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	<?php echo '</script'; ?>
>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DEL TRABAJO DE LOS CLIENTES </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Lugar</b><br />
				<input type="text" name="lugar" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Fecha Inicio</b><br />
				<input type="text" name="fecha_inicio" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Salario</b><br />
				<input type="text" name="salario" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="trabajos1">
		  </div>
		
</body>
</html><?php }
}
