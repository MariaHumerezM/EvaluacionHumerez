<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>
			TIPO DE INMUEBLE
		</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="tipo_inmueble_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>UBICACION</th><th>TIPO INMUEBLE</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			{assign var="b" value="0"}
			{assign var="total" value="`$pagina-1`"}
			{assign var="a" value="`$numreg*$total`"}
			{assign var="b" value="`$b+1+$a`"}
			{foreach item=r from=$tipos_inmuebles}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.ubicacion}</td>
				<td>{$r.tipo_inmueble}</td>
				<td align="center">
					<form name="formModif{$r.id_tipo_inmueble}" method="post" action="tipo_inmueble_modificar.php">
						<input type="hidden" name="id_tipo_inmueble" value="{$r.id_tipo_inmueble}">
						<a href="javascript:document.formModif{$r.id_tipo_inmueble}.submit();" title="Modificar Tipo Inmueble Sistema">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_tipo_inmueble}" method="post" action="tipo_inmueble_eliminar.php">
						<input type="hidden" name="id_tipo_inmueble" value="{$r.id_tipo_inmueble}">
						<a href="javascript:document.formElimi{$r.id_tipo_inmueble}.submit();" title="Eliminar Tipo Inmueble Sistema" onclick="javascript:return(confirm('Desea realmente Eliminar el tipo inmueble..?')); location.href='tipo_inmueble_eliminar.php'">
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
