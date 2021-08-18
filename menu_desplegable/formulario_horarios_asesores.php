<?php
	
	$entrada= $_POST["hora_entrada"];
	$salida = $_POST["hora_salida"];
	$dias = $_POST["dias"];
	$asesor = $_POST["asesor"];

	echo"Los datos del asesor son: <br><br>";

	echo"Hora de entrada: ".$entrada;
	echo"Hora de salida: ".$salida."<br>";
	echo"Dias: ".$dias."<br>";
	echo"Asesor: ".$asesor."<br>";
	
	
		
?>