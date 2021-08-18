<?php
	
	$salario= $_POST["salario"];
	$inicio = $_POST["fecha_inicio"];
	$fin = $_POST["fecha_fin"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];

	echo"Los datos del asesor son: <br><br>";

	echo"Salario: ".$salario;
	echo"Fecha Inicio: ".$inicio."<br>";
	echo"Fecha Fin: ".$fin."<br>";
	echo"Nombres: ".$nombres."<br>";
	echo"Apellidos: ".$apellidos."<br>";
	
	
		
?>