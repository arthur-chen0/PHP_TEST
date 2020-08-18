<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include_once ("cart.php");

$cart = new cart;

function addToCart($item, $price){
	global $cart;
	$cart->addToCart($item, $price);
}

function totalPrice(){
	global $cart;
	echo $cart->totalPrice();
}

if (isset($_POST['action'])) {

 	// switch ($_POST['action']) {

	 // 	case 'Iphone8':
		//  	addToCart("Inpone8", 22000);
	 // 	break;

	 // 	case 'Iphone11':
		//  	addToCart("Inpone11pro", 31000);
	 // 	break;

	 // 	case 'Iphone11pro':
		//  	addToCart("Inpone11pro", 39000);
	 // 	break;

	 // 	case 'Checkout':
	 // 		totalPrice();
	 // 	break;
	 	
 	// }
} 


?>