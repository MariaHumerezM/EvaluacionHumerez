<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_asistente_comercial = $_REQUEST["id_asistente_comercial"];

$smarty = new Smarty;

//$db->debug=true;


$sql = $db->Prepare("SELECT *
					  FROM asistente_comercial
					  WHERE id_asistente_comercial = ?
					  ");

$rs = $db->GetAll($sql, array($__id_asistente_comercial));
$smarty->assign("asistente_comercial", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("asistente_comercial_modificar.tpl");
?>