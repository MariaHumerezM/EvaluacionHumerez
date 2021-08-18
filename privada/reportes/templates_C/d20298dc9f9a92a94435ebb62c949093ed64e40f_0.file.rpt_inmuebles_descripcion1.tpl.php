<?php
/* Smarty version 3.1.36, created on 2021-07-30 23:36:51
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\rpt_inmuebles_descripcion1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61048d13b4aca2_62566217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20298dc9f9a92a94435ebb62c949093ed64e40f' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\rpt_inmuebles_descripcion1.tpl',
      1 => 1627688176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61048d13b4aca2_62566217 (Smarty_Internal_Template $_smarty_tpl) {
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
   	 		<h1> INMUEBLES -- DESCRIPCION </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>,MATERIAL</th><th>SUPERFICIE</th><th>NUMERO DE DORMITORIOS</th><th>PRECIO</th><th>DESCRIPCION</th>
   	  </tr>
   	  <?php $_smarty_tpl->_assignInScope('b', "1");?>
   	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inmuebles_descripcion1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   	  <tr>
   	  	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['material'];?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['superficie'];?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['numero_dormitorios'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio'];?>
</td>
   	  	<td><?php if ($_smarty_tpl->tpl_vars['r']->value['descripcion'] == 'BLOQUE A') {?>LUJO<?php } else {
if ($_smarty_tpl->tpl_vars['r']->value['descripcion'] == 'BLOQUE B') {?>MINIMALISTA<?php } else { ?>CONTEMPORANEO<?php }
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
