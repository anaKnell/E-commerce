<?php
/* Smarty version 3.1.33, created on 2019-07-18 12:51:01
  from 'C:\laragon\www\Boutique\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d306b35012ff3_64085007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76963da6836a773606ef526d1669c2bf83a67b8' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\templates\\card.tpl',
      1 => 1563453467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d306b35012ff3_64085007 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container border p-10" style="margin:100px; width:100%;">
    <div class="row m-3" style="width:100%;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cat1_card']->value, 'card', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
?>
            <div class="col-sm m-3">
                
                <div class="card d-flex border" style="width: 18rem; height:18rem;">
                    <img class="card-img-top" src="" alt="Card image cap" style=" height:20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Cat1_card']->value['Title'];?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Cat1_card']->value['Description'];?>
</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>  
                </div>
               
            </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
</section>
  <?php }
}
