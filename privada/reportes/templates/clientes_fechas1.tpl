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
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../../img/{$logo_constructora}" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> CLIENTES CON FECHAS </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>CLIENTES</th><th>FECHA INSERCION</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$clientes_fechas1}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres} {$r.apellidos}</td>
				<td>{$r.fec_insercion}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
	</center>
	<b>DEL:</b>{$fecha1} <b>A</b> {$fecha2}
</body>
</html>