<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_horario_asesor = $_REQUEST["id_horario_asesor"];

$smarty = new Smarty;

//$db->debug=true;


if (!$rs) {
	$reg = array();
	$reg["estado"] = 0;
	$reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("horarios_asesores", $reg, "UPDATE", "id_horario_asesor='".$__id_horario_asesor."'");
	header("Location:horarios_asesores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("horario_asesor_eliminar.tpl");
}
?>