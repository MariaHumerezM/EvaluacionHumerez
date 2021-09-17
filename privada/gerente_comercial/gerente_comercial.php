<?php

session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$smarty = new Smarty;

//$db->debug=true;


$sql = $db->Prepare("SELECT *
					  FROM gerente_comercial g 
					  INNER JOIN asistente_comercial c ON g.id_asistente_comercial = c.id_asistente_comercial
					  WHERE g.estado <> 0
					  AND c.estado <> 0
					  ORDER BY g.id_gerente_comercial DESC
					  ") ;
$rs = $db->GetAll($sql);

$smarty->assign("gerente_comercial", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("gerente_comercial.tpl");
?>