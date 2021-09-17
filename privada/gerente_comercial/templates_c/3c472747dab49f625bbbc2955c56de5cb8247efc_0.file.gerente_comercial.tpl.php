<?php
/* Smarty version 3.1.36, created on 2021-09-17 23:15:32
  from 'C:\wamp64\www\sis_constructora\privada\gerente_comercial\templates\gerente_comercial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61452194e888a3_47816527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c472747dab49f625bbbc2955c56de5cb8247efc' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\gerente_comercial\\templates\\gerente_comercial.tpl',
      1 => 1631920524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61452194e888a3_47816527 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>GERENTE COMERCIAL</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="gerente_comercial_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>FECHA INICIO</th><th>FECHA FIN</th><th>NOMBRES</th><th>APELLIDOS</th><th>EMAIL</th><th>SALARIO</th><!--<th>CLAVE</th>--><th>ASISTENTE COMERCIAL</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gerente_comercial']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_inicio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_fin'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
</td>
				<!--<td><?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
</td>-->
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_gerente_comercial'];?>
" method="post" action="gerente_comercial_modificar.php">
						<input type="hidden" name="id_gerente_comercial" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_gerente_comercial'];?>
">
						<input type="hidden" name="id_asistente_comercial" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_asistente_comercial'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_gerente_comercial'];?>
.submit();" title="Modificar Gerente Comercial">
							Modificar>>
					</form>
				</td>
				<td align="center">
					<form name="forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_gerente_comercial'];?>
" method="post" action="gerente_comercial_eliminar.php">
					<input type="hidden" name="id_gerente_comercial" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_gerente_comercial'];?>
">
					<a href="javascript:document.forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_gerente_comercial'];?>
.submit();" title="Eliminar Gerente Comercial" onclick='javascript:return(confirm("Desea realmente Eliminar el Gerente Comercial <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
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
