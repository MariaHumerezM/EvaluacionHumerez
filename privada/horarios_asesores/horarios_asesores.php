<?php

session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");


$smarty = new Smarty;

//$db->debug=true;


$sql = $db->Prepare("SELECT *
					  FROM horarios_asesores h 
					  INNER JOIN asesores a ON h.id_asesor = a.id_asesor
					  WHERE h.estado <> 0
					  AND a.estado <> 0
					  ORDER BY h.id_horario_asesor DESC
					  ") ;
$rs = $db->GetAll($sql);
$smarty->assign("horarios_asesores", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("horarios_asesores.tpl");
?>