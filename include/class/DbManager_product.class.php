<?php

	
/**
 * 
 */
class DbManager_product
{
	public $_pdo;

	function __construct()
	{
		$this->_pdo = new PDO("mysql:host=localhost; dbname=commerce; charset=utf8","root","");
		
	}

	function getCategories(){
	$prepCat = $this->_pdo->prepare('SELECT * FROM categories');
	$prepCat->execute();
	/*$prepCat->setFetchMode(PDO::FETCH_CLASS, 'category');*/
	$dataCat = $prepCat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'category');
	return $dataCat;
	}

	function getProductByCategory($id_cat){
		$sqlVIEW ="SELECT * FROM `product` WHERE `id_cat` =".$id_cat;
		$prepVIEW = $this->_pdo->prepare($sqlVIEW);
		$requeteVIEW= $prepVIEW->execute();	
		$value = $prepVIEW->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'product');
		return $value;
	}

	function getProducts(){
		$prep = $this->_pdo->prepare('SELECT * FROM product');
		$prep->execute();
		$data = $prep->fetchAll();
		return $data;
	}

	function getProductById($id_product){
			$sqlVIEW ="SELECT * FROM `product` WHERE `id` =".$id_product;	
			$prepVIEW = $this->_pdo->prepare($sqlVIEW);
			$prepVIEW->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'product');
			$prepVIEW->execute();
			
			$value = $prepVIEW->fetch();
			return $value;
	}
}
	
