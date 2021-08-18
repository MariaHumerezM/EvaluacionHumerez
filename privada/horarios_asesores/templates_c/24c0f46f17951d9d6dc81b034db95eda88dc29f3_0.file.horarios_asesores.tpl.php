<?php
/* Smarty version 3.1.36, created on 2021-07-01 14:56:31
  from 'C:\wamp64\www\sis_constructora\privada\horarios_asesores\templates\horarios_asesores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60ddd79f696400_28658511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24c0f46f17951d9d6dc81b034db95eda88dc29f3' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\horarios_asesores\\templates\\horarios_asesores.tpl',
      1 => 1623972994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ddd79f696400_28658511 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>HORARIOS ASESORES</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="horario_asesor_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>HORA ENTRADA</th><th>HORA SALIDA</th><th>DIAS</th><!--<th>CLAVE</th>--><th>ASESOR</th>
				<th><img src="../../img/modificar.png"></th>
				<th><img src="../../img/borrar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios_asesores']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['hora_entrada'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['hora_salida'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['dias'];?>
</td>
				<!--<td><?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
</td>-->
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center">
					<form name="formModificar<?php echo $_smarty_tpl->tpl_vars['r']->value['id_horario_asesor'];?>
" method="post" action="horario_asesor_modificar.php">
						<input type="hidden" name="id_horario_asesor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_horario_asesor'];?>
">
						<input type="hidden" name="id_asesor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_asesor'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_horario_asesor'];?>
.submit();" title="Modificar Horarios asesores">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_horario_asesor'];?>
" method="post" action="horario_asesor_eliminar.php">
					<input type="hidden" name="id_horario_asesor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_horario_asesor'];?>
">
					<a href="javascript:document.forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_horario_asesor'];?>
.submit();" title="Eliminar Horario Asesor" onclick='javascript:return(confirm("Desea realmente Eliminar el horario del asesor::: <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
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
