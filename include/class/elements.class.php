<?php

class elements 
{
	protected $id;
	protected $name;
	protected $text;
	protected $img;
	
	function __construct($id, $name, $text, $img){
		$this->id =$id;
		$this->name =$name;
		$this->text =$text;
		$this->img =$img;
	}

	function __get($name){
		return $this->$name;
	}

	function __set($name,$value){
		$this->$name = $value;
	}
}