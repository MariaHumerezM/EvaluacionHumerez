<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_tipo_inmueble.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="tipo_inmueble_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR TIPO DE INMUEBLE</h2>
			<p>
			  <input type="text" name="ubicacion" size="15" placeholder="Ubicacion" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="tipo_inmueble" size="15" placeholder="Tipo de Inmueble" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='tipos_inmuebles.php';" class="boton2" >
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
