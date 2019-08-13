<?php
/* Smarty version 3.1.33, created on 2019-08-13 08:49:24
  from 'C:\laragon\www\Boutique\Templates\signIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d527994e459b8_15490010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '555a2e93c47506b31cb94bbad9e5fef66baa45c2' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\signIn.tpl',
      1 => 1565686030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d527994e459b8_15490010 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Sign In</h5>
          <form class="form-signin" action="signIn.php" method="POST">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="Email_Login" class="form-control" placeholder="Email address" value="" required autofocus>
              <label for="Email_Login">Email address</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="inputPassword" name="Pass_Login" class="form-control" placeholder="Password"  value=""  required>
              <label for="Pass_Login">Password</label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember password</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            <hr class="my-4">
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
