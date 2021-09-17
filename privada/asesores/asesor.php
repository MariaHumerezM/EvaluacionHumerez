<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

//$db->debug=true;

contarRegistros($db, "asesor");

paginacion("asesor.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					  FROM asesores
					  WHERE estado <> 0
					  ORDER BY id_asesor DESC
					  LIMIT ? OFFSET ?
					  ") ;
$smarty->assign("asesor", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("asesor.tpl");
?>