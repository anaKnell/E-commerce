<?php
/* Smarty version 3.1.33, created on 2019-07-19 12:04:51
  from 'C:\laragon\www\Boutique\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d31b1e38f4b67_90100036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5d277527468ef9e25094c45a80aa05392efda3' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\templates\\navbar.tpl',
      1 => 1563537876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d31b1e38f4b67_90100036 (Smarty_Internal_Template $_smarty_tpl) {
?>    <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand text-warning" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            	<span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
              <ul class="navbar-nav mr-auto">
                <li  class="nav-item">
                  <a class="nav-link" href="/index.php?page=Accueil"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/index.php?page=Connexion">
                      <i class="fas fa-user" style="color: whitesmoke"></i>
                    </a>                  
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pack your bag and Go!</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Les voyages</a>
                    <a class="dropdown-item" href="#">Le back pack</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Les guides routard</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php?page=Panier">
                      <i class="fas fa-shopping-basket" style="color: whitesmoke"></i>
                    </a>                  
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
    </nav>

<?php }
}
