<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$descripcion = $_REQUEST["descripcion"];

$smarty = new Smarty;
//$db->debug=true;
if ($descripcion == "T") {
	$sql = $db->Prepare("SELECT *
						   FROM inmuebles
						   WHERE estado <> 0
						   ");
	$rs = $db->GetAll($sql);
} else {
	$sql = $db->Prepare("SELECT *
						 FROM inmuebles
						 WHERE descripcion = ?
						 AND estado <> 0

						 ");
	$rs = $db->GetAll($sql, array($descripcion));
}

$sql1 = $db->Prepare("SELECT *
						FROM constructora
						WHERE id_constructora = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_constructora = $rs1[0]["logo_constructora"];
$smarty->assign("logo_constructora", $logo_constructora);

$fecha= date("Y-m-d H:i:s");
$smarty->assign("inmuebles_descripcion1", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_inmuebles_descripcion1.tpl");
?>