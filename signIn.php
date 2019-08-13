<?php
require_once('include/appTo.inc.php');

if(isset($_POST) &&!empty($_POST)){
	$login = new login;
	$start = $login->start();
	/*var_dump($login);*/
}

if($start){
		$User = new DbManager_user;
		$users = $User->GetUsers();	
		;


		foreach($users as $key=>$value){

			
			echo $value->Email_User." == Le login est:".$login->Email_Login ."<br>". $value->Pass_User ." == le pass est:".$login->Pass_Login."<br>";
			if($value->Email_User == $login->Email_Login && $value->Email_User == $login->Email_Login){
				
				
				$check = true;
			}
			else{
				$check = false;
			}
		}

		if($check){
			echo "Vous êtes bien enregistré\n";  //relocalisation page accueil voir session start
		}
			else{
			echo "vous n'êtes pas enregistré \n"; //relocalisation template signIn
			}
}




