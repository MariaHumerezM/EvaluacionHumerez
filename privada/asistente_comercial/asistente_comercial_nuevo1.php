<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__nombres = $_POST["nombres"];
$__apellidos = $_POST["apellidos"];
$__fecha_inicio = $_POST["fecha_inicio"];
$__fecha_fin = $_POST["fecha_fin"];
$__telefono = $_POST["telefono"];
$__profesion = $_POST["profesion"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["nombres"] = $__nombres;
$reg["apellidos"] = $__apellidos;
$reg["fecha_inicio"] = $__fecha_inicio;
$reg["fecha_fin"] = $__fecha_fin;
$reg["telefono"] = $__telefono;
$reg["profesion"] = $__profesion;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("asistente_comercial",$reg,"INSERT");

if($rs1){
	$smarty->assign("mensaje", "DATOS INGRESADOS CORRECTAMENTE");
	header("Location: asistente_comercial.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("asistente_comercial_nuevo1.tpl");
}
?>