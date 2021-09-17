<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_cliente_trabajo = $_REQUEST["id_cliente_trabajo"];

$smarty = new Smarty;

//$db->debug=true;

/*LAS CONSULTAS SE TIENEN QUE HACER CON TODAS LAS TABLAS EN LAS QUE ID_USUARIO ESTA COMO HERENCIA*/

/*$sql = $db->Prepare("SELECT *
					 FROM clientes_trabajos
					 WHERE id_cliente_trabajo = ?
					 AND estado <> 0
					 ");
$rs = $db->GetAll($sql, array($__id_cliente_trabajo));*/

if (!$rs) {
	$reg = array();
	$reg["estado"] = 0;
	$reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("clientes_trabajos", $reg, "UPDATE", "id_cliente_trabajo='".$__id_cliente_trabajo."'");
	header("Location:clientes_trabajos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("cliente_trabajo_eliminar.tpl");
}
?>