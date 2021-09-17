<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_cliente_trabajo.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="cliente_trabajo_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR EL TRABAJO DEL CLIENTE</h2>
				<b>Cliente (*)</b><br>
					<select name="id_cliente">
					{foreach item =r from=$cliente}
					 <option value="{$r.id_cliente}">{$r.apellidos} - {$r.nombres}</option>
					 {/foreach}
					 {foreach item=r from=$clientes}
						<option value="{$r.id_cliente}">{$r.apellidos}-{$r.nombres}</option>
					 {/foreach}
					</select>
			{foreach item = r from=$cliente_trabajo}
			<p>
				<input type="text" name="lugar" size="15" placeholder="Lugar" onkeyup="this.value=this.value.toUpperCase()" value="{$r.lugar}">(*)
			</p>
			<p>
				<input type="text" name="fecha_inicio" size="15" placeholder="Fecha inicio" onkeyup="this.value=this.value.toUpperCase()" value="{$r.fecha_inicio}">(*)
			</p>
			<p>
				<input type="text" name="salario" size="15" placeholder="salario" onkeyup="this.value=this.value.toUpperCase()" value="{$r.salario}">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_cliente_trabajo" value="{$r.id_cliente_trabajo}">
				<input type="button" value ="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value ="Cancelar" onclick="javascript:location.href='clientes_trabajos.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>