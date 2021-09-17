<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));
$escala_laboral = strip_tags(stripslashes($_POST["escala_laboral"]));

//$db->debug=true;
if($nombres or $apellidos or $telefono or $escala_laboral){
	$sql3 = $db->Prepare("SELECT *
						  FROM clientes
						  WHERE nombres LIKE ?
						  AND apellidos LIKE ?
						  AND telefono LIKE ?
						  AND escala_laboral LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $telefono."%", $escala_laboral."%"));
	if($rs3){
		echo "<center>
				<table class='listado'>
				<tr>
					<th>ESCALA LABORAL</th><th>NOMBRESO</th><th>APELLIDOS</th><th>TELEFONO</th><th>SELECCIONE</th>
				</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["escala_laboral"];
			$str1 = $fila["nombres"];
			$str2 = $fila["apellidos"];
			$str3 = $fila["telefono"];
			echo"<tr>
				<td align= 'center'>".resaltar($escala_laboral, $str)."</td>
				<td>".resaltar($nombres, $str1)."</td>
				<td>".resaltar($apellidos, $str2)."</td>
				<td>".resaltar($telefono, $str3)."</td>
				<td align= 'center'>
					<input type='radio' name= 'seleccione' value= '".$fila['id_cliente']."'onclick='mostrar(".$fila["id_cliente"].")'>
					</td>
					</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>EL CLIENTE NO EXISTE!!</b></center><br>";
	}
}

?>