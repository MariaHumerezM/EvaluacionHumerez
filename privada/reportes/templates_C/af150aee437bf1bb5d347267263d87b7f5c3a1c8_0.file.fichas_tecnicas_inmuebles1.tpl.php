<?php
/* Smarty version 3.1.36, created on 2021-09-16 20:34:24
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\fichas_tecnicas_inmuebles1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143aa502eb143_27488363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af150aee437bf1bb5d347267263d87b7f5c3a1c8' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\fichas_tecnicas_inmuebles1.tpl',
      1 => 1628559962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143aa502eb143_27488363 (Smarty_Internal_Template $_smarty_tpl) {
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
	  		<h1> FICHA TECNICA DE INMUEBLE </h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inmueble']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">PRECIO</th><th>:</th>
							<td><input type="text" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['precio'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Material</th><th>:</th>
							<td><input type="text" name="material" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['material'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Superficie</th><th>:</th>
							<td><input type="text" name="superficie" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['superficie'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Numero de Dormitorios</th><th>:</th>
							<td><input type="text" name="numero_dormitorios" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['numero_dormitorios'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Descripcion</th><th>:</th>
							<td><input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
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
