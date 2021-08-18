<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

//$db->debug=true;

contarRegistros($db, "asistente_comercial");

paginacion("asistente_comercial.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					  FROM asistente_comercial
					  WHERE estado <> 0
					  ORDER BY id_asistente_comercial DESC
					  LIMIT ? OFFSET ?
					  ") ;
$smarty->assign("asistente_comercial", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("asistente_comercial.tpl");
?>