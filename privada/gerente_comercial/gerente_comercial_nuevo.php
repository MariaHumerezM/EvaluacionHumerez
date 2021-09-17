<?php
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM asistente_comercial 
					WHERE estado <> 0
					ORDER BY id_asistente_comercial DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("asistente_comercial", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("gerente_comercial_nuevo.tpl");
?>