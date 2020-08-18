<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

class production{

static $productionMap;

function addItem($item, $price){
	self :: $productionMap[$item] = $price; 
}

function getPrice($item){
	$price = self :: $productionMap[$item];
	return $price;
}

function getAllItem(){
	return self :: $productionMap;
}


}

?>
