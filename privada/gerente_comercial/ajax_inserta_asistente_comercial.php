<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$db->debug=true;
$nombres1 = $_POST["nombres1"];
$apellidos1 = $_POST["apellidos1"];
$fecha_inicio1 = $_POST["fecha_inicio1"];
$fecha_fin1 = $_POST["fecha_fin1"];
$telefono1 = $_POST["telefono1"];
$profesion1 = $_POST["profesion1"];

$reg = array();
$reg["nombres"] = $nombres1;
$reg["apellidos"] = $apellidos1;
$reg["fecha_inicio"] = $fecha_inicio1;
$reg["fecha_fin"] = $fecha_fin1;
$reg["telefono"] = $telefono1;
$reg["profesion"] = $profesion1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("asistente_comercial", $reg, "INSERT");

?>
