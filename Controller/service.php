<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include_once ($_SERVER['DOCUMENT_ROOT'] . "/Model/cart.php");

private $cart = new cart;

public function addToCart($item, $price){
	global $cart;
	$cart->addToCart($item, $price);
}

public function totalPrice(){
	global $cart;
	echo $cart->totalPrice();
}

?>