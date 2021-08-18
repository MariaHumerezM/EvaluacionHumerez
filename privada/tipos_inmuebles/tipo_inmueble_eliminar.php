<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_tipo_inmueble = $_REQUEST["id_tipo_inmueble"];

$smarty = new Smarty;

//$db->debug=true;

/*LAS CONSULTAS SE TIENEN QUE HACER CON TODAS LAS TABLAS EN LAS QUE ID_USUARIO ESTA COMO HERENCIA*/

$sql = $db->Prepare("SELECT *
					 FROM inmuebles
					 WHERE id_tipo_inmueble = ?
					 AND estado <> 0
					 ");
$rs = $db->GetAll($sql, array($__id_tipo_inmueble));

if (!$rs) {
	$reg = array();
	$reg["estado"] = 0;
	$reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tipos_inmuebles", $reg, "UPDATE", "id_tipo_inmueble='".$__id_tipo_inmueble."'");
	header("Location:tipos_inmuebles.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tipo_inmueble_eliminar.tpl");
}
?>