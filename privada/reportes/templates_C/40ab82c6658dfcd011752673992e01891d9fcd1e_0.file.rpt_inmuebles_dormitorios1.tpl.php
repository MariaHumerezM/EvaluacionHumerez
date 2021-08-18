<?php
/* Smarty version 3.1.36, created on 2021-08-10 01:53:36
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\rpt_inmuebles_dormitorios1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111dc209f6b79_59253046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ab82c6658dfcd011752673992e01891d9fcd1e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\rpt_inmuebles_dormitorios1.tpl',
      1 => 1628560404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111dc209f6b79_59253046 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
	  var ventanaCalendario=false
	  	function imprimir(){
	  	  if (confirm(' Desea Imprimir ?')){
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
   	 		<h1> INMUEBLES -- TIPO DE CASA </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>SUPERFICIE</th><th>PRECIO</th><th>DESCRIPCION</th><th>TIPO DE CASA</th>
   	  </tr>
   	  <?php $_smarty_tpl->_assignInScope('b', "1");?>
   	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inmuebles_dormitorios1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   	  <tr>
   	  	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['superficie'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
</td>
   	  	<td><?php if ($_smarty_tpl->tpl_vars['r']->value['numero_dormitorios'] == '1') {?>EXTRA FAMILIAR<?php } else {
if ($_smarty_tpl->tpl_vars['r']->value['numero_dormitorios'] == '2') {?>FAMILIAR<?php } else { ?>PERSONAL<?php }
}?></td>
   	  	<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
   	  	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

   </center>
</body>
</html><?php }
}
