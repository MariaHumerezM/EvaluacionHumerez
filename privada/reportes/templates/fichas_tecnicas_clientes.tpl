<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
	  function buscar() {
	  var d1, d2, d3, d4, contenedor, ajax, url, param;
	    contenedor = document.getElementById('clientes1');
	    d1 = document.formu.nombres.value;
	    d2 = document.formu.apellidos.value;
	    d3 = document.formu.telefono.value;
	    d4 = document.formu.escala_laboral.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_cliente.php"
	    param = "nombres="+d1+"&apellidos="+d2+"&telefono="+d3+"&escala_laboral="+d4;
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

	  function mostrar(id_cliente) {
	  var d1, ventanaCalendario;
	  d1 = id_cliente;
	  //alert(id_persona);
	  ventanaCalendario = window.open("fichas_tecnicas_clientes1.php?id_cliente=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	</script>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DE CLIENTES </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Nombres</b><br />
				<input type="text" name="nombres" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Apellidos</b><br />
				<input type="text" name="apellidos" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Telefono</b><br />
				<input type="text" name="telefono" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Escala Laboral</b><br />
				<input type="text" name="escala_laboral" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="clientes1">
		  </div>
		
</body>
</html>