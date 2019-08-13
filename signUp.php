<?php

require_once('include/appTo.inc.php');

/*$categories = $dbManager_product->getCategories();		
$Smarty->assign('categories',$categories);*/



//traitement php


function countCheck(){
	$count= 0;
	$msg =[];
	$reg_name = '/[a-zA-Z]{2,}/';
	$reg_pass = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/';

		if(!empty($_POST['Email_User']) && preg_match($reg_name, $_POST['Name_User'])){
			echo 'name ok + ';
		}
			else{
			$msg['Name']="Veuillez entrer un minimum de 2 caractères";
			$count +=1;
			}

		if(!empty($_POST['Email_User']) && filter_var($_POST['Email_User'], FILTER_VALIDATE_EMAIL)){
			echo 'email ok + ';
		}
			else{
			$msg['Email']="Vérifiez que vous avez bien entré un email valide";
			$count +=1;
			}

		if(preg_match($reg_pass, $_POST['Pass_User'])){
			echo 'pass ok ';		
		}
			else{
			$msg['pass']="Votre mot de passe doit contenir au minimum 8 caractères,un chiffre, un caractère spécial, et une lettre majuscule";
			$count +=1;	
			}
		/*if($_POST['Pass_User']) !== $_POST['Repeat_Pass_User'])){
				$msg['pass']="Attention votre mot de passe n'est pas le même, réessayez!";
				$count +=1;
			}*/
	
	
		return $count;
	
}

	function check(){
		if(isset($_POST)){
		$count = countCheck();

		if($count === 0){
			$DB = new DBManager_user;
			$DB->InsertNewUser();
			echo "c'est sur la BD";
			header("location:index.php?page=Bienvenue");
			
		}
		else{
			echo "Fonctionne pas".$count;
				header("location:index.php?page=signUp");
				
			}
	}
		
		}


		check();










