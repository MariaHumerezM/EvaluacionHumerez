<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM personas p
					 INNER JOIN usuarios u ON p.id_persona = u.id_persona
					 WHERE p.estado <> 0
					 AND u.estado <> 0
					 ORDER BY (u.id_persona) DESC
					 ");
$rs = $db->GetAll($sql);

$sql1 = $db->Prepare("SELECT *
						FROM constructora
						WHERE id_constructora = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_constructora = $rs1[0]["logo_constructora"];

$fecha= date("Y-m-d H:i:s");

$smarty->assign("personas_usuarios", $rs);
$smarty->assign("logo_constructora", $logo_constructora);
$smarty->assign("fecha", $fecha);

$smarty->assign("direc_css", $direc_css);
$smarty->display("personas_usuarios1.tpl");
?>