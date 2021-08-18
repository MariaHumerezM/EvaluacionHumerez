<?php

session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$smarty = new Smarty;

//$db->debug=true;


$sql = $db->Prepare("SELECT *
					  FROM clientes_trabajos t 
					  INNER JOIN clientes c ON t.id_cliente = c.id_cliente
					  WHERE t.estado <> 0
					  AND c.estado <> 0
					  ORDER BY t.id_cliente_trabajo DESC
					  ") ;
$rs = $db->GetAll($sql);

$smarty->assign("clientes_trabajos", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes_trabajos.tpl");
?>