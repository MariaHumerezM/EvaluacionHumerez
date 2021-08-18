<?php
/* Smarty version 3.1.36, created on 2021-08-05 20:38:17
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\fichas_tecnicas_trabajos1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_610c4c3922eb90_36490028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d526f111be53326b1fa57e35f467bf90c72218' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\fichas_tecnicas_trabajos1.tpl',
      1 => 1628194897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610c4c3922eb90_36490028 (Smarty_Internal_Template $_smarty_tpl) {
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
	  		<h1> FICHA TECNICA DEL TRABAJO DEL CLIENTE </h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trabajo']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">Salario</th><th>:</th>
							<td><input type="text" name="salario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['salario'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Lugar</th><th>:</th>
							<td><input type="text" name="lugar" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['lugar'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Fecha Inicio</th><th>:</th>
							<td><input type="text" name="fecha_inicio" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_inicio'];?>
" disabled=""></td>
						</tr>
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
