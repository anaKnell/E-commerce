<?php

/**
 * 
 */
class config 
{
	
	protected static $_pdo;
	protected static $_host;
	protected static $_dbName;
	protected static $_user;
	protected static $_pass;


	function __construct($pdo, $host, $dbName, $user, $pass)
	{
		$this->_pdo = new PDO("mysql:host=localhost; dbname=commerce; charset=utf8","root","");
		
	}

}