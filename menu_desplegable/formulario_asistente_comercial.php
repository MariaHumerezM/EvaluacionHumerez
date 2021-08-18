<?php
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$inicio = $_POST["fecha_inicio"];
	$fin = $_POST["fecha_fin"];
	$telefono = $_POST["telefono"];
	$profesion= $_POST["profesion"];

	echo"Los datos del asistente comercial son: <br><br>";

	echo"Nombre: ".$nombres."<br>";
	echo"Apellidos: ".$apellidos."<br>";
	echo"Fecha Inicio: ".$inicio."<br>";
	echo"Fecha Fin: ".$fin."<br>";
	echo"Telefono: ".$telefono."<br>";
	echo"Profesion: ".$profesion;
	
	
		
?>