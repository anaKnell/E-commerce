<?php
/* Smarty version 3.1.33, created on 2019-07-17 09:21:50
  from 'C:\laragon\www\Boutique\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ee8aedcd566_41916772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ffce0244db4e91821fa1acfcfe28ed5c7fe6881' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\template\\index.tpl',
      1 => 1563355243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2ee8aedcd566_41916772 (Smarty_Internal_Template $_smarty_tpl) {
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
