<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>HORARIOS ASESORES</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="horario_asesor_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>HORA ENTRADA</th><th>HORA SALIDA</th><th>DIAS</th><!--<th>CLAVE</th>--><th>ASESOR</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$horarios_asesores}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.hora_entrada}</td>
				<td>{$r.hora_salida}</td>
				<td>{$r.dias}</td>
				<!--<td>{$r.clave}</td>-->
				<td>{$r.apellidos} {$r.nombres}</td>
				<td align="center">
					<form name="formModificar{$r.id_horario_asesor}" method="post" action="horario_asesor_modificar.php">
						<input type="hidden" name="id_horario_asesor" value="{$r.id_horario_asesor}">
						<input type="hidden" name="id_asesor" value="{$r.id_asesor}">
						<a href="javascript:document.formModif{$r.id_horario_asesor}.submit();" title="Modificar Horarios asesores">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi{$r.id_horario_asesor}" method="post" action="horario_asesor_eliminar.php">
					<input type="hidden" name="id_horario_asesor" value="{$r.id_horario_asesor}">
					<a href="javascript:document.forElimi{$r.id_horario_asesor}.submit();" title="Eliminar Horario Asesor" onclick='javascript:return(confirm("Desea realmente Eliminar el horario del asesor::: {$r.nombres} {$r.apellidos}?"));'>Eliminar>></a>	
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
				
			</tr>
		</table>
	  </center>
   </body>
</html>