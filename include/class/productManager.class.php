<?php

class ProductManager{

	private $_pdo;

	public function __construct($pdo){
		$this->setPDO($pdo);
	}

	public function show(produit $product){
		//show DB
		$prep = $pdo->prepare('SELECT * FROM product');
		$prep->execute();
		$data = $prep->fetchAll();

		while($data=$prep->fetch(PDO::FETCH_ASSOC)){
			$products[]=new product($data);
		}
		return $products;
	}

	public function getONE($id){

			$prep = $pdo->prepare("SELECT * FROM `product` WHERE `id` =".$id);
			$prep->execute();	
			$value = $prep>fetch(PDO::FETCH_ASSOC);
	}

	public function setPDO(pdo $pdo){
		$this->_pdo=$pdo;
	}

	function getAllCategories(){

	}

	function getAllproducts(){
		
	}

	function getproductByCategorie($category_id){
		
	}
}