<?php

class login {
	protected $Email_Login;
    protected $Pass_Login;
    

    function __construct() {
        $this->Pass_Login = isset($_POST['Pass_Login']) ? $_POST['Pass_Login'] : null;
        $this->Email_Login = isset($_POST['Email_Login']) ? $_POST['Email_Login'] : null;
    }

    function __get($get){
		return $this->$get;
	}
	
    function start() {
        if (empty($this->Pass_Login) || empty($this->Email_Login)) {
            throw new Exception("Empty Post not allowed");
            $start = false;
        }

        else
        {
            //code permettant de comparer la DbManager_user à cet objet
            $start = true;
            

        }
        return $start;
    }
}
