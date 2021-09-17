<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_asistente_comercial = $_POST["id_asistente_comercial"];

//$db->debug=true;
	$sql3 = $db->Prepare("SELECT *
						  FROM asistente_comercial
						  WHERE id_asistente_comercial =?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($id_asistente_comercial));

	echo "<center>
	<table width= '60%' border ='1'>
	<tr>
		<th colspan = '4'>Datos Personales>/th>
	</tr>
	";
	foreach ($rs3 as $k => $fila) {
		echo "<tr>
				<td align ='center'>".$fila["profesion"]."</td>
				<td>".$fila["nombres"]."</td>
				<td>".$fila["apellidos"]."</td>
			</tr>";
	}
	echo"</table>
		</center>";
?>