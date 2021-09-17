<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_cliente = $_REQUEST["id_cliente"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM clientes
					 WHERE id_cliente = ?
					 AND estado <> 0

					 ");
$rs = $db->GetAll($sql, array($id_cliente));
$sql1 = $db->Prepare("SELECT *
						FROM constructora
						WHERE id_constructora = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_constructora = $rs1[0]["logo_constructora"];
$smarty->assign("logo_constructora", $logo_constructora);

$smarty->assign("cliente", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("fichas_tecnicas_clientes1.tpl");
?>