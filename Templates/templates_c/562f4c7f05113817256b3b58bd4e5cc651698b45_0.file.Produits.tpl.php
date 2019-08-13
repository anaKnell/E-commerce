<?php
/* Smarty version 3.1.33, created on 2019-08-09 09:11:11
  from 'C:\laragon\www\Boutique\Templates\Produits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d38af0426e9_24819418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '562f4c7f05113817256b3b58bd4e5cc651698b45' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\Produits.tpl',
      1 => 1565341831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d38af0426e9_24819418 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-around rounded m-4" style="background-color:#f5f0ea">           
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <div class="card d-flex border m-3" style="background-color:#f5f0ea">
            <div>
                <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->Img;?>
" alt="Card image cap" style=" height:20rem;">
            </div>
            <div class="card-body" style="background-color:#ede2d5">
                <h5 class="card-title" style="font-family: 'Shadows Into Light', cursive; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['value']->value->Name;?>
</h5>
                <a href="?page=vueProduit&id_product=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" class="btn rounded" style="color:#bd7344">Voir plus</a>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
