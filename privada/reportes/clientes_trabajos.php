<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM clientes c 
					 INNER JOIN clientes_trabajos t ON c.id_cliente = t.id_cliente
					 WHERE c.estado <> 0
					 AND t.estado <> 0
					 ORDER BY (t.id_cliente) DESC
					 ");
$rs = $db->GetAll($sql);

$smarty->assign("clientes_trabajos", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes_trabajos.tpl");
?>
