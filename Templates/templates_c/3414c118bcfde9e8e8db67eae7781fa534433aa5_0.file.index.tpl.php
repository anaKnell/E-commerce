<?php
/* Smarty version 3.1.33, created on 2019-07-17 10:37:57
  from 'C:\laragon\www\Boutique\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2efa85f39545_24824632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3414c118bcfde9e8e8db67eae7781fa534433aa5' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\templates\\index.tpl',
      1 => 1563355243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2efa85f39545_24824632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
 "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Test smarty</title>
	</head>
	<body>
		<h1>Test smarty</h1>
		<!-- ici j'injecte la donnée qui vient de mon script PHP "<?php echo $_smarty_tpl->tpl_vars['hello_world']->value;?>
" -->
		<h2 color="red"><?php echo $_smarty_tpl->tpl_vars['hello_world']->value;?>
</h2>
	</body>
</html><?php }
}
