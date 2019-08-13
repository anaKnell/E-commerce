<?php

class category extends elements{
	

	public function __construct($id= null, $name= "", $text = "", $img = ""){
		parent::__construct($id, $name, $text, $img);
	}

	public function __get($retour){
		return $this->$retour;
	}

}