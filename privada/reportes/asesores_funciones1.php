<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM asesores a 
					 INNER JOIN funciones f ON a.id_asesor = f.id_asesor
					 WHERE a.estado <> 0
					 AND f.estado <> 0
					 ORDER BY (f.id_asesor) DESC
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

$smarty->assign("asesores_funciones", $rs);
$smarty->assign("logo_constructora", $logo_constructora);
$smarty->assign("fecha", $fecha);

$smarty->assign("direc_css", $direc_css);
$smarty->display("asesores_funciones1.tpl");
?>