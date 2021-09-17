<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_asistente_comercial = $_POST["id_asistente_comercial"];
$__fecha_inicio = $_POST["fecha_inicio"];
$__fecha_fin = $_POST["fecha_fin"];
$__nombres = $_POST["nombres"];
$__apellidos = $_POST["apellidos"];
$__email = $_POST["email"];
$__salario = $_POST["salario"];

/*$hash=password_hash($__clave, PASSWORD_DEFAULT);*/
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_asistente_comercial"] = $__id_asistente_comercial;
$reg["fecha_inicio"] = $__fecha_inicio;
$reg["fecha_fin"] = $__fecha_fin;
$reg["nombres"] = $__nombres;
$reg["apellidos"] = $__apellidos;
$reg["email"] = $__email;
$reg["salario"] = $__salario;
/*$reg["clave"] = $hash;*/
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("gerente_comercial",$reg,"INSERT");

if($rs1){
	header("Location: gerente_comercial.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("gerente_comercial_nuevo1.tpl");
}
?>