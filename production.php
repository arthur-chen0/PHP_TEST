<?php

class production{

static $productionMap;

function addItem($item, $price){
	$this->productionMap[$item] = $price; 
}

function getPrice($item){
	$price = $this->productionMap[$item];
	return $price;
}

function getAllItem(){
	return $this->productionMap;
}


}

?>
