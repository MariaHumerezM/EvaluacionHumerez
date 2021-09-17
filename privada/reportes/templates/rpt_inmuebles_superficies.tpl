<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
	 function validar(){
	 	superficies = document.formu.superficies.value;
	 	if (document.formu.superficies.value =="") {
	 		alert("Por favor seleccione la superficie");
	 		document.formu.superficies.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_inmuebles_superficies1.php?superficies=" + superficies , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INMUEBLES POR SUPERFICIES</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione la superficie</b>
		  <select name="superficies">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value="60MTS2">60 MTS2</option>
		  	<option value="80MTS2">80 MTS2</option>
		  	<option value="100MTS2">100 MTS2</option>
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