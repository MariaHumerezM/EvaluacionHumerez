<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_asistente_comercial.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="asistente_comercial_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR ASISTENTE COMERCIAL</h2>
			{foreach item =r from=$asistente_comercial}
			  <input type="text" name="nombres" size="15" placeholder="Nombres" value="{$r.nombres}">(*)
			<p>
			  <input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellidos}">(*)
			</p>
			<p>
			  <input type="text" name="fecha_inicio" size="15" placeholder="Fecha_inicio" onkeyup="this.value=this.value.toUpperCase()" value="{$r.fecha_inicio}">(*)
			</p>
			<p>
			  <input type="text" name="fecha_fin" size="15" placeholder="Fecha_fin" onkeyup="this.value=this.value.toUpperCase()" value="{$r.fecha_fin}">(*)
			</p>
			<p>
			  <input type="text" name="telefono" size="15" placeholder="Telefono" value="{$r.telefono}">(*)
			</p>
			<p>
			  <input type="text" name="profesion" size="15" placeholder="Profesion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.profesion}">
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_asistente_comercial" value="{$r.id_asistente_comercial}">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='asistente_comercial.php';" class="boton2" >
			</p>
			{/foreach}
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
