<?php
/* Smarty version 3.1.33, created on 2019-07-25 12:32:13
  from 'C:\laragon\www\Boutique\Templates\monCompte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d39a14dc0fc82_34937447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3ac5aa69bfb1e3126c277ec677d4080140218d1' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\monCompte.tpl',
      1 => 1564057356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d39a14dc0fc82_34937447 (Smarty_Internal_Template $_smarty_tpl) {
?> <section class="row">
    <div class="col-6">
      <h5>Mon Profil</h5>
      <form action="" method="post">
        <div class="row">
          <div class="col-6"><label for="name">Nom *</label></div>
          <div class="col-6"><input type="text" id="name" name="nom" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userLogin']->value->_nom;?>
"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="email">Email *</label></div>
          <div class="col-6"><input type="email"id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userLogin']->value->_login;?>
"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="pass">Pass *</label></div>
          <div class="col-6"><input type="password" id="pass" name="pass" class="form-control" placeholder="******"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="pass2">Retapez votre pass *</label></div>
          <div class="col-6"><input type="password" id="pass2" name="pass2" class="form-control" placeholder="******"></div>
        </div>
        <div class="row">
          <div class="col-6"></div>
          <div class="col-6"><input type="button" id="send" name="send" class="btn btn-outline-primary" value="Modifier"></div>
        </div>
      </form>
    </div>
    <div class="col-6">
      <h5>Historique des commandes</h5>
    </div>
  </section><?php }
}
