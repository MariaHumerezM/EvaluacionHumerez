<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_horario_asesor.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="horario_asesor_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR HORARIO DEL ASESOR</h2>
				<b>ASESORES (*)</b>
					<select name="id_asesor">
					 <option value="">---- seleccione ----</option>
					 {foreach item=r from=$asesores}
						<option value="{$r.id_asesor}">{$r.apellidos}-{$r.nombres}</option>
					 {/foreach}
					</select>
			<p>
				<input type="text" name="hora_entrada" size="15" placeholder="Hora entrada" >(*)
			</p>
			<p>
				<input type="text" name="hora_salida" size="15" placeholder="Hora salida" >(*)
			</p>
			<p>
				<input type="text" name="dias" size="15" placeholder="Dias" >(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='horarios_asesores.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>
