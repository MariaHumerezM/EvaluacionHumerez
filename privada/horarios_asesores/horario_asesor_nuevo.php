<?php
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM asesores a
					WHERE a.estado <> 0
					ORDER BY a.id_asesor DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("asesores", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("horario_asesor_nuevo.tpl");
?>