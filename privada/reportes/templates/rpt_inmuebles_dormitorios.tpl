<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
	 function validar(){
	 	dormitorios = document.formu.dormitorios.value;
	 	if (document.formu.dormitorios.value =="") {
	 		alert("Por favor seleccione el numero de dormitorios");
	 		document.formu.dormitorios.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_inmuebles_dormitorios1.php?dormitorios=" + dormitorios , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INMUEBLES POR NUMERO DE DORMITORIOS</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione el numero de dormitorios</b>
		  <select name="dormitorios">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value="1">1</option>
		  	<option value="2">2</option>
		  	<option value="3">3</option>
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