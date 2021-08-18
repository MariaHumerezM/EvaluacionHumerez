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
	  		<h1> FICHA TECNICA DEL TRABAJO DEL CLIENTE </h1>
	  	</td>
	   </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$trabajo}
						<tr>
							<th align="right">Salario</th><th>:</th>
							<td><input type="text" name="salario" value="{$r.salario}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Lugar</th><th>:</th>
							<td><input type="text" name="lugar" value="{$r.lugar}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Fecha Inicio</th><th>:</th>
							<td><input type="text" name="fecha_inicio" value="{$r.fecha_inicio}" disabled=""></td>
						</tr>
						</tr>
						{/foreach}
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html>