<?php
/* Smarty version 3.1.33, created on 2019-08-09 09:54:02
  from 'C:\laragon\www\Boutique\Templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d42ba3ebad1_71384201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15918e812a7bcbf6b8fa379322b6640f4489ecd5' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\Templates\\navbar.tpl',
      1 => 1565344439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d42ba3ebad1_71384201 (Smarty_Internal_Template $_smarty_tpl) {
?>    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
      <a class="navbar-brand" href="?page=Accueil" style="font-family: 'Shadows Into Light', cursive; text-align:center; font-size: 1.5rem; color:#bd7344">Umà Coffee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown m-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user" style="color: #bd7344"></i></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?page=signUp">S'inscrire</a>
              <a class="dropdown-item" href="?page=signIn">Se connecter</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?page=myAccount">Mon compte</a>
            </div>
          </li>
          <li class="nav-item dropdown m-1">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Coffee Shop</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
              <a class="dropdown-item" href="?page=Produits&id_cat=<?php echo $_smarty_tpl->tpl_vars['value']->value->id_cat;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->Name;?>
</a>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </li>
            <li class="nav-item m-1">
              <a class="nav-link  " href="?page=Panier">
                <i class="fas fa-shopping-basket d-inline" style="color: #bd7344"></i>
                <div class="d-inline">Mon panier(0)</div>
              </a>                  
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

<?php }
}
