<?php
/* Smarty version 3.1.36, created on 2021-06-17 23:29:25
  from 'C:\wamp64\www\sis_constructora\privada\reportes\templates\inmuebles_fechas1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cbdad5f0db23_54827257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24c8c9741a5911141178eb19d7301bd034a1009' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_constructora\\privada\\reportes\\templates\\inmuebles_fechas1.tpl',
      1 => 1623972547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cbdad5f0db23_54827257 (Smarty_Internal_Template $_smarty_tpl) {
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
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../../img/<?php echo $_smarty_tpl->tpl_vars['logo_constructora']->value;?>
" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> INMUEBLES CON FECHAS </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>INMUEBLE</th><th>TIPO INMUEBLE</th><th>FECHA INSERCION</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inmuebles_fechas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ubicacion'];?>
 </td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['tipo_inmueble'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fec_insercion'];?>
</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>
		<br><br>
	</center>
	<b>DEL:</b><?php echo $_smarty_tpl->tpl_vars['fecha1']->value;?>
 <b>A</b> <?php echo $_smarty_tpl->tpl_vars['fecha2']->value;?>

</body>
</html><?php }
}
