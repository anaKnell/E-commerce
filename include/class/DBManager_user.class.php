<?php

class DBManager_user
{
	public $_pdo;

	function __construct()
	{
		$this->_pdo = new PDO("mysql:host=localhost; dbname=commerce; charset=utf8","root","");
	}

	function InsertNewUser(){

		if(isset($_POST['Name_User']) && isset($_POST['Email_User']) && isset($_POST['Pass_User'])){
		
		$sql = 'INSERT INTO user(Name_User, Email_User, Pass_User) VALUES (:Name_User,:Email_User,:Pass_User);';
		$req = $this->_pdo->prepare($sql);	

		$req->bindValue(':Name_User', $_POST['Name_User']);
		$req->bindValue(':Email_User',$_POST['Email_User']);
		$req->bindvalue(':Pass_User',$_POST['Pass_User']);

		$data =$req->execute();
		
		}
	}

	function GetUsers(){
			$sqlLog='SELECT `id_user`, `Name_User`, `Email_User`, `Pass_User` FROM `user`';
			$prep = $this->_pdo->prepare($sqlLog);
			$prep->execute();
			$db = $prep->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'user');
			return $db; 
	}
}


