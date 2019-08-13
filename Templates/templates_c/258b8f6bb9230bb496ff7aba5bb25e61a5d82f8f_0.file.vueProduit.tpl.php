<?php
/* Smarty version 3.1.33, created on 2019-08-09 09:50:13
  from 'C:\laragon\www\Boutique\Templates\vueProduit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d41d580a7b7_74047420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '258b8f6bb9230bb496ff7aba5bb25e61a5d82f8f' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\vueProduit.tpl',
      1 => 1565344183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d41d580a7b7_74047420 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container border p-10" style="margin:100px; width:100%;">

    <div class="row m-3" style="width:100%;">
		
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->Name;?>
</h5>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->Text;?>
</p>
       
    </div>
</section>
<?php }
}
