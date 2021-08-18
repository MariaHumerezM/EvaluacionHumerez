<?php
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_cliente_trabajo = $_REQUEST["id_cliente_trabajo"];
$__id_cliente = $_REQUEST["id_cliente"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM clientes_trabajos 
					WHERE id_cliente_trabajo = ?
					");


$rs = $db->GetAll($sql, array($__id_cliente_trabajo));

$sql2 = $db->Prepare("SELECT *
					FROM clientes
					WHERE id_cliente = ?
					AND estado <> 0
					");


$rs2 = $db->GetAll($sql2, array($__id_cliente));

$sql3 = $db->Prepare("SELECT *
					FROM clientes 
					WHERE id_cliente <> ?
					AND estado <> 0
					");


$rs3 = $db->GetAll($sql3, array($__id_cliente));



$smarty->assign("cliente_trabajo",$rs);
$smarty->assign("cliente", $rs2);
$smarty->assign("clientes", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("cliente_trabajo_modificar.tpl");
?>