<?php 
// include ("error_logs.php");
class cart{

static $cartMap;
// static $logs = new error_logs;

function addToCart($item, $price){
	self :: $cartMap[$item] = $price; 
}

function totalPrice(){
	$totalPrice;
	foreach (self :: $cartMap as $price) {
		$totalPrice += $price;
	}	
	// $logs->log("Total price is " . $totalPrice);
	return $totalPrice;
}

}

?>