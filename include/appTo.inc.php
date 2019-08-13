<?php 

session_start();

require_once ('../smarty-3.1.33/smarty-3.1.33/libs/Autoloader.php');
Smarty_Autoloader::register();

require_once ('include/autoloader.php');
autoloader::register();

$Smarty = new Smarty;

$Smarty->debugging = true;
