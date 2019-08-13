<?php
/* Smarty version 3.1.33, created on 2019-08-12 12:28:39
  from 'C:\laragon\www\Boutique\Templates\signUp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d515b770bfcc4_77133177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29e060b7d022d95078f0ec89d69e213273f5a5c5' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\signUp.tpl',
      1 => 1565612222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d515b770bfcc4_77133177 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="row m-5">
    <div class="col-8 border ">
      <h5>Inscription</h5>
      <form action="signUp.php" method="POST">
        <div class="row m-1">
          <div class="col-6"><label for="Name_User">Nom</label></div>
          <div class="col-6"><input type="text" id="nom_login" name="Name_User" class="form-control" value=""></div>
        </div>
        <div class="row m-1">
          <div class="col-6"><label for="Email_User">Email</label></div>
          <div class="col-6"><input type="email"id="email_login" name="Email_User" class="form-control" value=""></div>
          <span><?php echo '<?=';?> $msg['name']<?php echo '?>';?></span>
        </div>
        <div class="row m-1">
          <div class="col-6"><label for="Pass_User">Mot de passe</label></div>
          <div class="col-6"><input type="password" id="pass_login" name="Pass_User" class="form-control" placeholder="******" ></div>
        </div>
        <div class="row m-1">
          <div class="col-6"><label for="Repeat_Pass_User">Retapez votre mot de passe</label></div>
          <div class="col-6"><input type="password" id="Repeat_pass_login" name="Repeat_Pass_User" class="form-control" placeholder="******" value=""></div>
        </div>
        <div class="row m-1">
          <div class="col-6"></div>
          <div class="col-6"><input type="submit" id="send" name="insert_login" class="btn btn-outline-primary" value="S'inscrire"></div>
        </div>
      </form>
    </div>
  </section><?php }
}
