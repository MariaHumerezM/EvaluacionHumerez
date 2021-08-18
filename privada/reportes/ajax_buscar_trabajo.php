<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$lugar = strip_tags(stripslashes($_POST["lugar"]));
$fecha_inicio = strip_tags(stripslashes($_POST["fecha_inicio"]));
$salario = strip_tags(stripslashes($_POST["salario"]));

//$db->debug=true;
if($lugar or $fecha_inicio or $salario){
	$sql3 = $db->Prepare("SELECT *
						  FROM clientes_trabajos
						  WHERE lugar LIKE ?
						  AND fecha_inicio LIKE ?
						  AND salario LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($lugar."%", $fecha_inicio."%", $salario."%"));
	if($rs3){
		echo "<center>
				<table class='listado'>
				<tr>
					<th>LUGAR</th><th>FECHA INICIO</th><th>SALARIO</th><th>SELECCIONE</th>
				</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["lugar"];
			$str1 = $fila["fecha_inicio"];
			$str2 = $fila["salario"];
			echo"<tr>
				<td align= 'center'>".resaltar($salario, $str)."</td>
				<td>".resaltar($lugar, $str1)."</td>
				<td>".resaltar($fecha_inicio, $str2)."</td>
				<td align= 'center'>
					<input type='radio' name= 'seleccione' value= '".$fila['id_cliente_trabajo']."'onclick='mostrar(".$fila["id_cliente_trabajo"].")'>
					</td>
					</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>EL TRABAJO DEL CLIENTE NO EXISTE!!</b></center><br>";
	}
}

?>