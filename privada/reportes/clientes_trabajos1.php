 <?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM clientes c
					 INNER JOIN clientes_trabajos t ON c.id_cliente = t.id_cliente
					 WHERE c.estado <> 0
					 AND t.estado <> 0
					 ORDER BY (t.id_cliente) DESC
					 ");
$rs = $db->GetAll($sql);

$sql1 = $db->Prepare("SELECT *
						FROM constructora
						WHERE id_constructora = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_constructora = $rs1[0]["logo_constructora"];

$fecha= date("Y-m-d H:i:s");

$smarty->assign("clientes_trabajos", $rs);
$smarty->assign("logo_constructora", $logo_constructora);
$smarty->assign("fecha", $fecha);

$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes_trabajos1.tpl");
?>