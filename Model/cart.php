<?php 
// include ("error_logs.php");
class cart{

static $cartMap;
// static $logs = new error_logs;

function addToCart($item, $price){
	self :: $cartMap = unserialize($_COOKIE['cart']);
	var_dump(self :: $cartMap);
	self :: $cartMap[$item] = $price; 
	setcookie("cart",serialize(self :: $cartMap),time() + (60 * 5));
	var_dump(self :: $cartMap);
}

function removeCart($item, $price){
	self :: $cartMap[$item] = 0;
}

function totalPrice(){
	$cartData = unserialize($_COOKIE['cart']);
	var_dump($cartData);
	$totalPrice = 0;
	foreach ($cartData as $item => $price) {
		$totalPrice += $price;
	}	
	// $logs->log("Total price is " . $totalPrice);
	return $totalPrice;
}

}

?>