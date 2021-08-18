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
   	 		<h1> INMUEBLES -- TIPO DE CASA </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>SUPERFICIE</th><th>PRECIO</th><th>DESCRIPCION</th><th>TIPO DE CASA</th>
   	  </tr>
   	  {assign var="b" value="1"}
   	  {foreach item=r from=$inmuebles_dormitorios1}
   	  <tr>
   	  	<td align="center">{$b}</td>
   	  	<td>{$r.superficie}</td>
         <td>{$r.precio}</td>
         <td>{$r.descripcion}</td>
   	  	<td>{if $r.numero_dormitorios=='1'}EXTRA FAMILIAR{else}{if $r.numero_dormitorios=='2'}FAMILIAR{else}PERSONAL{/if}{/if}</td>
   	  	{assign var="b" value="`$b+1`"}
   	  	{/foreach}
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> {$fecha}
   </center>
</body>
</html>