<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

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

$smarty->assign("asesores_funciones", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("asesores_funciones.tpl");
?>
