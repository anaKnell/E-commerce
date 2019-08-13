<?php 
/**
 * 
 */
class user
{
	protected $id_user;
	protected $Name_User;
	protected $Email_User;
	protected $Pass_User;


	function __construct($name_user="", $email_user="", $pass_user="")
	{
		# code...
		$this->id_user = null;
		$this->Name_User = $name_user;
		$this->Email_User = $email_user;
		$this->Pass_User = $pass_user;
	}

	function __get($get){
		return $this->$get;
	}

	function __set($get, $value){
		$this->$get = $value;
	}


}