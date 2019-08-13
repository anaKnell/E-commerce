<?php
/* Smarty version 3.1.33, created on 2019-07-19 12:15:26
  from 'C:\laragon\www\Boutique\Accueil.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d31b45ec63979_55013207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '520b66ec7e22e922b1681a2a0b7b067e730f93bb' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Accueil.html',
      1 => 1563538470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d31b45ec63979_55013207 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:templates/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 	
	<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
<?php }
}
