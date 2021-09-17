<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$profesion = strip_tags(stripslashes($_POST["profesion"]));

//$db->debug=true;

if ($nombres or $apellidos or $profesion){
	$sql3 = $db->Prepare("SELECT *
						  FROM asistente_comercial
						  WHERE nombres LIKE ?
						  AND apellidos LIKE ?
						  AND profesion LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $profesion."%"));

	if ($rs3) {
		echo"<center>
			<table width='60%' border='1'>
			  <tr>
			    <th>PROFESION</th><th>NOMBRES</th><th>APELLIDOS</th>
			  </tr>";
		foreach ($rs3 as $k => $fila) {
				 $str = $fila["profesion"];
				 $str1 = $fila["nombres"];
				 $str2 = $fila["apellidos"];
				 
			echo"<tr>
					<td align='center'>".resaltar($profesion, $str)."</td>
					<td>".resaltar($nombres, $str1)."</td>
					<td>".resaltar($apellidos, $str2)."</td>
					<td align='center'>
					   <input type='radio' name='opcion' value='' onClick='buscar_asistente_comercial(".$fila["id_asistente_comercial"].")'>
					</td>
				</tr>";
		}
		 echo"</table>
		</center>";
	} else {
		echo"<center><b> EL ASISTENTE COMERCIAL NO EXISTE!!</b></center><br>";
		echo"<center>
			<table class='listado'>
			  <tr>
			     <td><b>(*)PROFESION</b></td>
			     <td><input type='text' name='profesion1' size='10'></td>
			  </tr>
			  <tr>
			     <td><b>(*)NOMBRES</b></td>
			     <td><input type='text' name='nombres1' size='10'
			       onkeyup='this.value=this.value.toUpperCase()'></td>
			  </tr>
			  <tr>
			     <td><b>(*)APELLIDOS</b></td>
			     <td><input type='text' name='apellidos1' size='10'
			       onkeyup='this.value=this.value.toUpperCase()'></td>
			  </tr>
			  <tr>
			     <td><b>(*)FECHA INICIO</b></td>
			     <td><input type='text' name='fecha_inicio1' size='10'
			       onkeyup='this.value=this.value.toUpperCase()'></td>
			  </tr>
			  <tr>
			     <td><b>(*)FECHA FIN</b></td>
			     <td><input type='text' name='fecha_fin1' size='10'
			       onkeyup='this.value=this.value.toUpperCase()'></td>
			  </tr>
			  <tr>
			     <td><b>(*)TELEFONO</b></td>
			     <td><input type='text' name='telefono1' size='10'></td>
			  </tr>
			  <tr>
			     <td align='center' colspan='2'>
			       <input type='button' value='ADICIONAR ASISTENTE COMERCIAL' onClick='insertar_asistente_comercial()'>
			     </td>
			  </tr>
			</table>
			</center>
				";
	}
}
?>