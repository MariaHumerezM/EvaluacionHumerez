<?php
/* Smarty version 3.1.36, created on 2021-09-17 21:07:50
  from 'C:\wamp64\www\sis_constructora\privada\clientes_trabajos\templates\clientes_trabajos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_614503a6c66eb5_67269603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b3847d2cdd7537c1c536fc30009a0166ec372c' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\clientes_trabajos\\templates\\clientes_trabajos.tpl',
      1 => 1620873266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614503a6c66eb5_67269603 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>CLIENTES TRABAJOS</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="cliente_trabajo_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>LUGAR</th><th>FECHA INICIO</th><th>SALARIO</th><!--<th>CLAVE</th>--><th>CLIENTE</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes_trabajos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['lugar'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_inicio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
</td>
				<!--<td><?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
</td>-->
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
" method="post" action="cliente_trabajo_modificar.php">
						<input type="hidden" name="id_cliente_trabajo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
">
						<input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
.submit();" title="Modificar Clientes Trabajos">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
" method="post" action="cliente_trabajo_eliminar.php">
					<input type="hidden" name="id_cliente_trabajo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
">
					<a href="javascript:document.forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente_trabajo'];?>
.submit();" title="Eliminar Cliente trabajo" onclick='javascript:return(confirm("Desea realmente Eliminar el Trabajo del Cliente <?php echo $_smarty_tpl->tpl_vars['r']->value['lugar'];?>
?"));'>Eliminar>></a>	
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				
			</tr>
		</table>
	  </center>
   </body>
</html><?php }
}
