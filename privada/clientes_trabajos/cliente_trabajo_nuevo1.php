<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_cliente = $_POST["id_cliente"];
$__lugar = $_POST["lugar"];
$__fecha_inicio = $_POST["fecha_inicio"];
$__salario = $_POST["salario"];

/*$hash=password_hash($__clave, PASSWORD_DEFAULT);*/
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_cliente"] = $__id_cliente;
$reg["lugar"] = $__lugar;
$reg["fecha_inicio"] = $__fecha_inicio;
$reg["salario"] = $__salario;
/*$reg["clave"] = $hash;*/
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("clientes_trabajos",$reg,"INSERT");

if($rs1){
	header("Location: clientes_trabajos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("cliente_trabajo_nuevo1.tpl");
}
?>