<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
	 function validar(){
	 	descripcion = document.formu.descripcion.value;
	 	if (document.formu.descripcion.value =="") {
	 		alert("Por favor seleccione el Bloque");
	 		document.formu.descripcion.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_inmuebles_descripcion1.php?descripcion=" + descripcion , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INMUEBLES POR DESCRPCION</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione el bloque</b>
		  <select name="descripcion">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value="BLOQUE A">BLOQUE A</option>
		  	<option value="BLOQUE B">BLOQUE B</option>
		  	<option value="BLOQUE C">BLOQUE C</option>
		  </select>
		 </p>
		 <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton">
		 </p>
		</form>
	</div>
</body>
</html>