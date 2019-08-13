    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
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
              {foreach from=$categories key=k item=value}
              <a class="dropdown-item" href="?page=Produits&id_cat={$value->id_cat}">{$value->Name}</a>
              {/foreach}
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

