<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM asesores a 
					 INNER JOIN horarios_asesores h ON a.id_asesor = h.id_asesor
					 WHERE a.estado <> 0
					 AND h.estado <> 0
					 ORDER BY (h.id_asesor) DESC
					 ");
$rs = $db->GetAll($sql);

$smarty->assign("asesores_horarios", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("asesores_horarios.tpl");
?>
