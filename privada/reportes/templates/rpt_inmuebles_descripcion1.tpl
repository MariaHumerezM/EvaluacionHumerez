<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	  var ventanaCalendario=false
	  	function imprimir(){
	  	  if (confirm(' Desea Imprimir ?')){
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
   	 		<h1> INMUEBLES -- DESCRIPCION </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>,MATERIAL</th><th>SUPERFICIE</th><th>NUMERO DE DORMITORIOS</th><th>PRECIO</th><th>DESCRIPCION</th>
   	  </tr>
   	  {assign var="b" value="1"}
   	  {foreach item=r from=$inmuebles_descripcion1}
   	  <tr>
   	  	<td align="center">{$b}</td>
   	  	<td>{$r.material}</td>
   	  	<td>{$r.superficie}</td>
   	  	<td>{$r.numero_dormitorios}</td>
         <td>{$r.precio}</td>
   	  	<td>{if $r.descripcion=='BLOQUE A'}LUJO{else}{if $r.descripcion=='BLOQUE B'}MINIMALISTA{else}CONTEMPORANEO{/if}{/if}</td>
   	  	{assign var="b" value="`$b+1`"}
   	  	{/foreach}
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> {$fecha}
   </center>
</body>
</html>