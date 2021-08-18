<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>
			ASISTENTE COMERCIAL
		</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="asistente_comercial_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>FECHA INICIO</th><th>FECHA FIN</th><th>TELEFONO</th><th>PROFESION</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			{assign var="b" value="0"}
			{assign var="total" value="`$pagina-1`"}
			{assign var="a" value="`$numreg*$total`"}
			{assign var="b" value="`$b+1+$a`"}
			{foreach item=r from=$asistente_comercial}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres}</td>
				<td>{$r.apellidos}</td>
				<td>{$r.fecha_inicio}</td>
				<td>{$r.fecha_fin}</td>
				<td>{$r.telefono}</td>
				<td>{$r.profesion}</td>
				<td align="center">
					<form name="formModif{$r.id_asistente_comercial}" method="post" action="asistente_comercial_modificar.php">
						<input type="hidden" name="id_asistente_comercial" value="{$r.id_asistente_comercial}">
						<a href="javascript:document.formModif{$r.id_asistente_comercial}.submit();" title="Modificar Asistente Comercial Sistema">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_asistente_comercial}" method="post" action="asistente_comercial_eliminar.php">
						<input type="hidden" name="id_asistente_comercial" value="{$r.id_asistente_comercial}">
						<a href="javascript:document.formElimi{$r.id_asistente_comercial}.submit();" title="Eliminar Asistente Comercial Sistema" onclick="javascript:return(confirm('Desea realmente Eliminar el asistente comercial {$r.nombres} {$r.apellidos}?')); location.href='asistente_comercial_eliminar.php'">
							Eliminar>>
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

		<!--PAGINACION------------->
		<table>
			<tr align="center">
				<td>
					{if !empty($urlback)}
					<a onclick="location.href='{$urlback}'" style="font-family: Verdana; font-size: 9px;cursor:pointer"; >&laquo;
					Anterior</a>
				  {/if}
				  {if !empty($paginas)}
				  	{foreach from =$paginas item=pag}
				  		{if $pag.npag == $pagina}
				  			{if $pagina neq '1'}|{/if}<b style="color:#FB992F;font-size: 12px;">{$pag.npag}</b>
				  		{else}
				  		| <a onclick="location.href='{$pag.pagV}'" style="cursor:pointer;">{$pag.npag} </a>
				  		{/if}
				  	{/foreach}
				  	{/if}
				  	{if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
				  	|<a onclick="location.href='{$urlnext}'" style="font-family: Verdana;font-size: 9px;cursor:pointer">Siguiente&raquo;</a>
				  	{/if}	
				</td>
			</tr>
		</table>
	  </center>
   </body>
</html>
