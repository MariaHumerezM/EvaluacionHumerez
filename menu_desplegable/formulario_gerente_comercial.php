<?php
	
	$inicio = $_POST["fecha_inicio"];
	$fin = $_POST["fecha_fin"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$salario= $_POST["salario"];

	echo"Los datos del gerente comercial son: <br><br>";

	echo"Fecha Inicio: ".$inicio."<br>";
	echo"Fecha Fin: ".$fin."<br>";
	echo"Nombres: ".$nombres."<br>";
	echo"Apellidos: ".$apellidos."<br>";
	echo"Email: ".$email."<br>";
	echo"Salario: ".$salario;
	
	
?>