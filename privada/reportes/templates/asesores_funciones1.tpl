<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				if(confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td> <img src="../constructora/logos/{$logo_constructora}" width="70%"></td>
			<td align="center" width="80%"><h1>ASESORES FUNCIONES</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<th>NRO</th><th>ASESOR</th><th>HORAS</th><th>CANTIDAD DE CONTACTOS</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$asesores_funciones}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres} {$r.apellidos}</td>
				<td>{$r.horas}</td><td>{$r.contactos}</td>
				{assign var ="b" value="`$b+1`"}
			</tr>
			{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b>{$fecha}
	</center>
	
</body>
</html>
