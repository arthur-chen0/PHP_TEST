<?php
include ("error_logs.php");
class cart{

static $cartMap;
// static $logs = new error_logs;

function addToCart($item, $price){
	$this->cartMap[$item] = $price; 
}

function totalPrice(){
	$totalPrice;
	foreach ($cartMap as $price) {
		$totalPrice += $price;
	}
	// $logs->log("Total price is " . $totalPrice);
	return $totalPrice;
}

}

?>