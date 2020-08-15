<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include_once ("cart.php");
// include_once ("error_logs.php");

$cart = new cart;
// $log = new error_logs;

function addToCart($item, $price){
	global $cart;
	$cart->addToCart($item, $price);
	// echo $"add to cart success";
}

if (isset($_POST['action'])) {
	// $log->write($POST['action']);
 	switch ($_POST['action']) {
	 	case 'Iphone8':
	 	echo "add inpone8"
		 	addToCart("Inpone 8",22000);
	 	break;

	 	case 'Iphone11':
		 	addToCart("Inpone 11 pro",31000);
	 	break;

	 	case 'Iphone11pro':
		 	addToCart("Inpone 11 pro",39000);
	 	break;
	 	
 	}
} 


?>