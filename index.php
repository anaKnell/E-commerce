<?php
	// Inclure la librairie smarty
require_once('../smarty-3.1.33/smarty-3.1.33/libs/Smarty.class.php');

require_once('include/appTo.inc.php');

$Smarty->template_dir = './templates/';
$Smarty->compile_dir = './templates/templates_c/';
$Smarty->config_dir	= './templates/configs/';
$Smarty->cache_dir	= './templates/cache/';

//Appelle Manager DB
$dbManager_product = new DbManager_product();




// Lien et template

$page = 'Accueil';

if (isset($_GET['page'])){
	$page = $_GET['page'];
}

		

switch ($page) {

	case 'Accueil':
		$categories = $dbManager_product->getCategories();		
		$Smarty->assign('categories',$categories);
		$template = 'Templates/Accueil.tpl';
		break;

	case 'Produits':

		//categorie
		$categories = $dbManager_product->getCategories();		
		$Smarty->assign('categories',$categories);

		//Produit par categorie
		$id_cat = $_GET['id_cat'];
		$products =$dbManager_product->getProductByCategory($id_cat);
		$Smarty->assign('products', $products);

		//template
		$template = 'Templates/Produits.tpl';
		break;

	case 'vueProduit':

		//Le produit
		$id_product = $_GET['id_product'];
		$product =$dbManager_product->getProductById($id_product);

		$Smarty->assign('product', $product);
		$template = 'Templates/vueProduit.tpl';
		break;

	case 'Panier':
		
		include('pdf.php');
		$template = 'Templates/Panier.tpl';
		break;

	case 'myAccount':
		$template ='Templates/myAccount.tpl';
		break;

	case 'login':
		$template ='Templates/login.tpl';
		break;

	case 'signUp':
		$categories = $dbManager_product->getCategories();		
		$Smarty->assign('categories',$categories);

		include('signUp.php');
		$template ='Templates/signUp.tpl';
		
		break;

	case 'signIn':

		$categories = $dbManager_product->getCategories();		
		$Smarty->assign('categories',$categories);
		
		
		include('signIn.php');

		

		
		$template ='Templates/signIn.tpl';
		break;

	case 'Bienvenue':
		$categories = $dbManager_product->getCategories();		
		$Smarty->assign('categories',$categories);
		$template ='Templates/Bienvenue.tpl';
		break;
	
	default:
		$template = 'Templates/Accueil.tpl';
		break;
}


	//assigne les variables
	$Smarty->assign('page', $page);
	$Smarty->assign('template', $template);

	


	
	// Provoque le rendu du template
	$Smarty->display('layout.tpl');

