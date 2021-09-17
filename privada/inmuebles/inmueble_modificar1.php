<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_cliente = $_REQUEST["id_cliente"];
$__id_cliente_trabajo = $_REQUEST["id_cliente_trabajo"];
$__lugar = $_POST["lugar"];
$__fecha_inicio = $_POST["fecha_inicio"];
$__salario = $_POST["salario"];

//$hash=password_hash($__clave, PASSWORD_DEFAULT);
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_cliente"] = $__id_cliente;
$reg["lugar"] = $__lugar;
$reg["fecha_inicio"] = $__fecha_inicio;
$reg["salario"] = $__salario;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("clientes_trabajos",$reg,"UPDATE", "id_cliente_trabajo='".$__id_cliente_trabajo."'");

if($rs1){
	header("Location: clientes_trabajos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_cliente_trabajo", $__id_cliente_trabajo);
	$smarty->display("cliente_trabajo_modificar1.tpl");
}
?>