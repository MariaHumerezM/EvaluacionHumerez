<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_gerente_comercial.js"></script>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" >
	  function buscar(){
		var d1, contenedor, url;
	    contenedor = document.getElementById('asistente_comercial');
		contenedor2 = document.getElementById('asistente_comercial_seleccionado');
		contenedor3 = document.getElementById('asistente_comercial_insertado');
	    d1 = document.formu.nombres.value;
	    d2 = document.formu.apellidos.value;
	    d3 = document.formu.profesion.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_asistente_comercial.php";
	    param = "nombres="+d1+"&apellidos="+d2+"&profesion="+d3;
		ajax.open("POST",url,true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange= function(){
			if(ajax.readyState==4){
				contenedor.innerHTML= ajax.responseText;
				contenedor2.innerHTML ="";
				contenedor3.innerHTML ="";

			}
		}
		ajax.send(param);
	  }
	  function buscar_asistente_comercial(id_asistente_comercial){
		  var d1, contenedor, contenedor2, url,ajax,param;
		  contenedor = document.getElementById('asistente_comercial_seleccionado');
		  contenedor2 = document.getElementById('asistente_comercial');
		  document.formu.id_asistente_comercial.value = id_asistente_comercial;

		  d1 = id_asistente_comercial;
		  ajax = nuevoAjax();
	    url = "ajax_buscar_asistente_comercial1.php";
	    param = "id_asistente_comercial="+d1;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange= function(){
			if(ajax.readyState==4){
				contenedor.innerHTML= ajax.responseText;
				contenedor2.innerHTML ="";
			}
		}
		ajax.send(param);
	 }
	 function insertar_asistente_comercial(){
		var d1, d2, d3, d4,d5,d6,d7,f,m, contenedor,contenedor2, contenedor3, ajax, url, param;
	    contenedor = document.getElementById('asistente_comercial_seleccionado');
		contenedor2 = document.getElementById('asistente_comercial');
		contenedor3 = document.getElementById('asistente_comercial_insertado');
	    d1 = document.formu.nombres1.value;
	    d2 = document.formu.apellidos1.value;
	    d3 = document.formu.fecha_inicio1.value;
	    d4 = document.formu.fecha_fin1.value;
		d5 = document.formu.telefono1.value;
	    d6 = document.formu.profesion1.value;
		
		if(d1 == ""){
			alert("Por favor introduzca un nombre");
			document.formu.nombre1.focus();
			return;
		}
		if(d2 == ""){
			alert("Por favor introduzca un apellido");
			document.formu.apellido1.focus();
			return;
		}
		if(d5 == ""){
			alert("Por favor introduzca su telefono");
			document.formu.telefono1.focus();
			return;

		ajax = nuevoAjax();
		url = "ajax_inserta_asistente_comercial.php";
		param = "nombres1="+d1+"&apellidos1="+d2+"&fecha_inicio1="+d3+"&fecha_fin1="+d4+"&telefono1="+d5+"&profesion1="+d6;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4){
				contenedor.innerHTML = "";
				contenedor2.innerHTML = "";
				contenedor3.innerHTML = ajax.responseText;
			}
		}
		ajax.send(param);

	 }
	</script>
</head>
<body>
	<center>
		<h1>REGISTRAR GERENTE COMERCIAL</h1>
		<form action="gerente_comercial_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="right">Seleccione asistente comercial (*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
								<b>Nombres</b><br>
								<input type="text" name="nombres" value="" size="10" onKeyUp= "buscar()">
							</td>
							<td>
								<b>Apellidos</b><br>
								<input type="text" name="apellidos" value="" size="10" onKeyUp= "buscar()">
							</td>
							<td>
								<b>Profesion</b><br>
								<input type="text" name="profesion" value="" size="10" onKeyUp= "buscar()">
							</td>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<table width="100%">
						<tr>
							<td colspan="3">
								<div id="asistente_comercial"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<table width="100%">
						<tr>
							<td colspan="3">
								<div id="asistente_comercial_seleccionado"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<table width="100%">
						<tr>
							<td colspan="3">
								<input type="hidden" name="id_asistente_comercial">
								<div id="asistente_comercial_insertado"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th align="right">Usuario (*)</th>
				<th>:</th>
				<td><input type="text" name="gerente_comercial"> </td>
			</tr>
			<tr>
				<th align="right">Clave (*)</th>
				<th>:</th>
				<td><input type="password" name="clave"> </td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();">
					<input type="button" value="Cancelar" onclick="javascript:location.href='gerente_comercial.php';">
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
			</tr>
		</table>
	</form>
	</center>
	</body>
</html>
