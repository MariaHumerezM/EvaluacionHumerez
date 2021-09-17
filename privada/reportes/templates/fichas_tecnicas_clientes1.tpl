<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
		   function imprimir(){
		   if (confirm(' Desea imprimir ?')) {
		   	  window.print();
		    }
		   }
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../../img/{$logo_constructora}" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> FICHA TECNICA DE CLIENTE </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$cliente}
						<tr>
							<th align="right">CI</th><th>:</th>
							<td><input type="text" name="escala_laboral" value="{$r.escala_laboral}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Nombres</th><th>:</th>
							<td><input type="text" name="nombres" value="{$r.nombres}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Apellidos</th><th>:</th>
							<td><input type="text" name="apellidos" value="{$r.apellidos}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Telefono</th><th>:</th>
							<td><input type="text" name="telefono" value="{$r.telefono}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Descripcion escala laboral</th><th>:</th>
							<td><input type="text" name="descripcion_escala_laboral" value="{$r.descripcion_escala_laboral}" disabled=""></td>
						</tr>
						{/foreach}
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html>