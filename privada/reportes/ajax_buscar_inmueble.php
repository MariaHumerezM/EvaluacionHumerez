<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$material = strip_tags(stripslashes($_POST["material"]));
$superficie = strip_tags(stripslashes($_POST["superficie"]));
$numero_dormitorios = strip_tags(stripslashes($_POST["numero_dormitorios"]));
$precio = strip_tags(stripslashes($_POST["precio"]));

//$db->debug=true;
if($material or $superficie or $numero_dormitorios or $precio){
	$sql3 = $db->Prepare("SELECT *
						  FROM inmuebles
						  WHERE material LIKE ?
						  AND superficie LIKE ?
						  AND numero_dormitorios LIKE ?
						  AND precio LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($material."%", $superficie."%", $numero_dormitorios."%", $precio."%"));
	if($rs3){
		echo "<center>
				<table class='listado'>
				<tr>
					<th>PRECIO</th><th>MATERIAL</th><th>SUPERFICIE</th><th>NUMERO DE DORMITORIOS</th><th>SELECCIONE</th>
				</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["precio"];
			$str1 = $fila["material"];
			$str2 = $fila["superficie"];
			$str3 = $fila["numero_dormitorios"];
			echo"<tr>
				<td align= 'center'>".resaltar($precio, $str)."</td>
				<td>".resaltar($material, $str1)."</td>
				<td>".resaltar($superficie, $str2)."</td>
				<td>".resaltar($numero_dormitorios, $str3)."</td>
				<td align= 'center'>
					<input type='radio' name= 'seleccione' value= '".$fila['id_inmueble']."'onclick='mostrar(".$fila["id_inmueble"].")'>
					</td>
					</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>EL INMUEBLE NO EXISTE!!</b></center><br>";
	}
}

?>