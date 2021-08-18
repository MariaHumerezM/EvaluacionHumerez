<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__ubicacion = $_POST["ubicacion"];
$__tipo_inmueble = $_POST["tipo_inmueble"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["ubicacion"] = $__ubicacion;
$reg["tipo_inmueble"] = $__tipo_inmueble;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipos_inmuebles",$reg,"INSERT");

if($rs1){
	$smarty->assign("mensaje", "DATOS INGRESADOS CORRECTAMENTE");
	header("Location: tipos_inmuebles.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tipo_inmueble_nuevo1.tpl");
}
?>