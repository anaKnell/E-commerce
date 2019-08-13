<?php
/* Smarty version 3.1.33, created on 2019-07-22 07:39:27
  from 'C:\laragon\www\Boutique\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d35682f66f450_97241558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6bc4699cc8eab619c90e22f8ac6e7bd36dfd0e' => 
    array (
      0 => 'C:\\laragon\\www\\Boutique\\index.php',
      1 => 1563781061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d35682f66f450_97241558 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
	';?>// Inclure la librairie smarty
require_once('../smarty-3.1.33/smarty-3.1.33/libs/Smarty.class.php');

	// Instancier notre objet smarty
$Smarty = new Smarty();

$Smarty->template_dir	= './templates/';
$Smarty->compile_dir	= './templates/templates_c/';
$Smarty->config_dir	= './templates/configs/';
$Smarty->cache_dir	= './templates/cache/';




// Lien et template

$page = 'Accueil';

if (isset($_GET['page'])){
	$page = $_GET['page'];
}

switch ($page) {

	case 'Accueil':
		$template = 'Templates/Accueil.tpl';
		break;
	case 'Connexion':
		$template = 'Templates/connexion.tpl';
		break;

	case 'Produits':
		$template = 'Templates/Produits.tpl';
		break;

	case 'Panier':
		$template = 'Templates/Panier.tpl';
		break;

	case 'vueProduit':
		$template = 'Templates/panier.tpl';
		break;
	
	default:
		$template = 'Templates/Accueil.tpl';
		break;
}


// Provoque le rendu du template
	$Smarty->assign('page', $page);
	$Smarty->assign('template', $template);
	$Smarty->display('index.html.tpl');

//connect PDO
	$pdo = new PDO("mysql:host=localhost; dbname=commerce","root","");
	$prep = $pdo->prepare('SELECT * FROM product');
	$prep->execute();
	$data =$prep->fetch(PDO::FETCH_OBJ);
	var_dump($data);
	$Smarty->assign('prep',$prep);
	$Smarty->assign('pdo',$pdo);
	$Smarty->assign('data',$data);






<?php }
}
