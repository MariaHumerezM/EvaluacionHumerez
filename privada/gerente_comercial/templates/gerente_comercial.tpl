<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>GERENTE COMERCIAL</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="gerente_comercial_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>FECHA INICIO</th><th>FECHA FIN</th><th>NOMBRES</th><th>APELLIDOS</th><th>EMAIL</th><th>SALARIO</th><!--<th>CLAVE</th>--><th>ASISTENTE COMERCIAL</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$gerente_comercial}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.fecha_inicio}</td>
				<td>{$r.fecha_fin}</td>
				<td>{$r.nombres}</td>
				<td>{$r.apellidos}</td>
				<td>{$r.email}</td>
				<td>{$r.salario}</td>
				<!--<td>{$r.clave}</td>-->
				<td>{$r.apellidos} {$r.nombres}</td>
				<td align="center">
					<form name="formModif{$r.id_gerente_comercial}" method="post" action="gerente_comercial_modificar.php">
						<input type="hidden" name="id_gerente_comercial" value="{$r.id_gerente_comercial}">
						<input type="hidden" name="id_asistente_comercial" value="{$r.id_asistente_comercial}">
						<a href="javascript:document.formModif{$r.id_gerente_comercial}.submit();" title="Modificar Gerente Comercial">
							Modificar>>
					</form>
				</td>
				<td align="center">
					<form name="forElimi{$r.id_gerente_comercial}" method="post" action="gerente_comercial_eliminar.php">
					<input type="hidden" name="id_gerente_comercial" value="{$r.id_gerente_comercial}">
					<a href="javascript:document.forElimi{$r.id_gerente_comercial}.submit();" title="Eliminar Gerente Comercial" onclick='javascript:return(confirm("Desea realmente Eliminar el Gerente Comercial {$r.nombres} {$r.apellidos}?"));'>Eliminar>></a>	
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
				
			</tr>
		</table>
	  </center>
   </body>
</html>