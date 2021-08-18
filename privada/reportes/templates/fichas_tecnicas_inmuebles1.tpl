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
	  		<h1> FICHA TECNICA DE INMUEBLE </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$inmueble}
						<tr>
							<th align="right">PRECIO</th><th>:</th>
							<td><input type="text" name="precio" value="{$r.precio}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Material</th><th>:</th>
							<td><input type="text" name="material" value="{$r.material}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Superficie</th><th>:</th>
							<td><input type="text" name="superficie" value="{$r.superficie}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Numero de Dormitorios</th><th>:</th>
							<td><input type="text" name="numero_dormitorios" value="{$r.numero_dormitorios}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Descripcion</th><th>:</th>
							<td><input type="text" name="descripcion" value="{$r.descripcion}" disabled=""></td>
						</tr>
						{/foreach}
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html>