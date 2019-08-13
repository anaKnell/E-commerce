<?php


class product extends elements {

	protected $prix;
	

public function __construct($id= null,$name ="", $text="", $img = "", $prix = null){
	parent::__construct($id, $name, $text, $img);
	$this->Prix = $prix;
}

public function __get($retour){
 return $this->$retour;
}



}