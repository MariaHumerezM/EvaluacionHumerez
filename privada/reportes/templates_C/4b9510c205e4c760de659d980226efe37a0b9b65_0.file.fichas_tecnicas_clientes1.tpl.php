<?php
/* Smarty version 3.1.36, created on 2021-09-16 22:45:50
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\fichas_tecnicas_clientes1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143c91ee2d800_23656041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b9510c205e4c760de659d980226efe37a0b9b65' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\fichas_tecnicas_clientes1.tpl',
      1 => 1631831929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143c91ee2d800_23656041 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		   function imprimir(){
		   if (confirm(' Desea imprimir ?')) {
		   	  window.print();
		    }
		   }
	<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../../img/<?php echo $_smarty_tpl->tpl_vars['logo_constructora']->value;?>
" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> FICHA TECNICA DE CLIENTE </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cliente']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">CI</th><th>:</th>
							<td><input type="text" name="escala_laboral" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['escala_laboral'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Nombres</th><th>:</th>
							<td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Apellidos</th><th>:</th>
							<td><input type="text" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Telefono</th><th>:</th>
							<td><input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Descripcion escala laboral</th><th>:</th>
							<td><input type="text" name="descripcion_escala_laboral" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion_escala_laboral'];?>
" disabled=""></td>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html><?php }
}
