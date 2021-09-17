<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_asistente_comercial = $_REQUEST["id_asistente_comercial"];

$smarty = new Smarty;

//$db->debug=true;

/*LAS CONSULTAS SE TIENEN QUE HACER CON TODAS LAS TABLAS EN LAS QUE ID_PERSONA ESTA COMO HERENCIA*/
$sql = $db->Prepare("SELECT *
					 FROM gerente_comercial
					 WHERE id_asistente_comercial = ?
					 AND estado <> 0
					 ");
$rs = $db->GetAll($sql, array($__id_asistente_comercial));

if (!$rs) {
	$reg = array();
	$reg["estado"] = 0;
	$reg["id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("asistente_comercial", $reg, "UPDATE", "id_asistente_comercial='".$__id_asistente_comercial."'");
	header("Location:asistente_comercial.php");
	exit();

} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("asistente_comercial_eliminar.tpl");
}
?>