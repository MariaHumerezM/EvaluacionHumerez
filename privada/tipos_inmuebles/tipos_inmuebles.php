<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

//$db->debug=true;

contarRegistros($db, "tipos_inmuebles");

paginacion("tipos_inmuebles.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					  FROM tipos_inmuebles
					  WHERE estado <> 0
					  AND id_tipo_inmueble > 1
					  ORDER BY id_tipo_inmueble DESC
					  LIMIT ? OFFSET ?
					  ") ;
$smarty->assign("tipos_inmuebles", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("tipos_inmuebles.tpl");
?>