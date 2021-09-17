<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_asistente_comercial.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="asistente_comercial_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR ASISTENTE COMERCIAL</h2>
			<p>
			  <input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="fecha_inicio" size="15" placeholder="Fecha inicio" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="fecha_fin" size="15" placeholder="Fecha fin" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="telefono" size="15" placeholder="telefono" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="profesion" size="15" placeholder="Profesion" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='asistente_comercial.php';" class="boton2" >
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
