<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
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
	</script>
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
</html>