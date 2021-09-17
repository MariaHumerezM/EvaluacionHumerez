<?php
/* Smarty version 3.1.36, created on 2021-09-16 20:34:12
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\fichas_tecnicas_inmuebles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143aa44be5993_50462267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a6f105a1f530994380927835d3f8d46cd5eb95' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\fichas_tecnicas_inmuebles.tpl',
      1 => 1628560048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143aa44be5993_50462267 (Smarty_Internal_Template $_smarty_tpl) {
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
	  var d1, d2, d3, d4, contenedor, ajax, url, param;
	    contenedor = document.getElementById('inmuebles1');
	    d1 = document.formu.material.value;
	    d2 = document.formu.superficie.value;
	    d3 = document.formu.numero_dormitorios.value;
	    d4 = document.formu.precio.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_inmueble.php"
	    param = "material="+d1+"&superficie="+d2+"&numero_dormitorios="+d3+"&precio="+d4;
	    //alert(param);
	    ajax.open("POST", url, true);
	    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    ajax.onreadystatechange = function() {
	    	if (ajax.readyState == 4) {
	    		contenedor.innerHTML = ajax.responseText;
	    	}
	    }
	    ajax.send(param);
	  }

	  function mostrar(id_inmueble) {
	  var d1, ventanaCalendario;
	  d1 = id_inmueble;
	  //alert(id_persona);
	  ventanaCalendario = window.open("fichas_tecnicas_inmuebles1.php?id_inmueble=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	<?php echo '</script'; ?>
>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DE INMUEBLES </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Material</b><br />
				<input type="text" name="material" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Superficie</b><br />
				<input type="text" name="superficie" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Numero de Dormitorios</b><br />
				<input type="text" name="numero_dormitorios" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Precio</b><br />
				<input type="text" name="precio" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="inmuebles1">
		  </div>
		
</body>
</html><?php }
}
