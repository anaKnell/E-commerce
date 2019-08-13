<?php
/* Smarty version 3.1.33, created on 2019-08-09 09:10:37
  from 'C:\laragon\www\Boutique\Templates\Accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d388d9f5c29_71634858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb2e7d2883b92950b4ac5eb6b6e8ff4c2478fdb' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\Accueil.tpl',
      1 => 1565341761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d388d9f5c29_71634858 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container m-auto rounded " style="background-color:#f5f0ea">
	
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'value', false, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

<div class="row m-4 border-bottom">
	<div class="col-7 m-4">
		<h2 class="p-2" style="font-family: 'Shadows Into Light', cursive; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['value']->value->Name;?>
</h2>
		<p class="p-2"><?php echo $_smarty_tpl->tpl_vars['value']->value->Text;?>
</p>
		<a class="btn border rounded" href="?page=Produits&id_cat=<?php echo $_smarty_tpl->tpl_vars['value']->value->id_cat;?>
" role="button" style="color:#bd7344">Voir notre sélection</a>
	</div>
	<div class="col-3 m-2">
		<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->Img;?>
" alt="image category" class="rounded">
	</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
