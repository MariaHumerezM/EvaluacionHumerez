<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>CLIENTES TRABAJOS</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="cliente_trabajo_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>LUGAR</th><th>FECHA INICIO</th><th>SALARIO</th><!--<th>CLAVE</th>--><th>CLIENTE</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$clientes_trabajos}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.lugar}</td>
				<td>{$r.fecha_inicio}</td>
				<td>{$r.salario}</td>
				<!--<td>{$r.clave}</td>-->
				<td>{$r.apellidos} {$r.nombres}</td>
				<td align="center">
					<form name="formModif{$r.id_cliente_trabajo}" method="post" action="cliente_trabajo_modificar.php">
						<input type="hidden" name="id_cliente_trabajo" value="{$r.id_cliente_trabajo}">
						<input type="hidden" name="id_cliente" value="{$r.id_cliente}">
						<a href="javascript:document.formModif{$r.id_cliente_trabajo}.submit();" title="Modificar Clientes Trabajos">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi{$r.id_cliente_trabajo}" method="post" action="cliente_trabajo_eliminar.php">
					<input type="hidden" name="id_cliente_trabajo" value="{$r.id_cliente_trabajo}">
					<a href="javascript:document.forElimi{$r.id_cliente_trabajo}.submit();" title="Eliminar Cliente trabajo" onclick='javascript:return(confirm("Desea realmente Eliminar el Trabajo del Cliente {$r.lugar}?"));'>Eliminar>></a>	
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
				
			</tr>
		</table>
	  </center>
   </body>
</html>