<?php
/* Smarty version 3.1.33, created on 2019-07-18 12:51:01
  from 'C:\laragon\www\Boutique\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d306b3508a788_00470015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dda1ce0f380469069fa95b1a57b1d880c69b25a' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\templates\\login.tpl',
      1 => 1563453471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d306b3508a788_00470015 (Smarty_Internal_Template $_smarty_tpl) {
?><form>
  <h2>Connexion</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }
}
