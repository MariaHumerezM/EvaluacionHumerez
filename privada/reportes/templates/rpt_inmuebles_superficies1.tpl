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
   	 		<h1> ESTILO POR SUPERFICIE </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>NUMERO DE DORMITORIOS</th><th>PRECIO</th><th>DESCRIPCION</th><th>ESTILO POR SUPERFICIE</th>
   	  </tr>
   	  {assign var="b" value="1"}
   	  {foreach item=r from=$inmuebles_superficies1}
   	  <tr>
   	  	<td align="center">{$b}</td>
   	  	<td>{$r.numero_dormitorios}</td>
         <td>{$r.precio}</td>
         <td>{$r.descripcion}</td>
   	  	<td>{if $r.superficie=='100MTS2'}BAULERA Y ESTACIONAMIENTO{else}{if $r.superficie=='80MTS2'}ESTACIONAMIENTO{else}BASICO{/if}{/if}</td>
   	  	{assign var="b" value="`$b+1`"}
   	  	{/foreach}
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> {$fecha}
   </center>
</body>
</html>