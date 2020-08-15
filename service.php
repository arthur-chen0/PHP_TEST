<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include_once ("cart.php");
// include_once ("error_logs.php");

$cart = new cart;
// $log = new error_logs;

if (isset($_POST['action'])) {
	// $log->write($POST['action']);
 	switch ($_POST['action']) {
	 	case 'Iphone8':
	 		echo "fuck <br>";
		 	addToCart("Inpone 8",22000);
		 	// $log->write("addToCart iphone 8");
	 	break;

	 	case 'Iphone11':
	 		echo "addToCart iphone 11<br>";
		 	addToCart("Inpone 11 pro",31000);
		 	// $log->write("addToCart iphone 11 pro");
	 	break;

	 	case 'Iphone11pro':
	 		echo "addToCart iphone 11 pro <br>";
		 	addToCart("Inpone 11 pro",39000);
		 	// $log->write("addToCart iphone 11 pro");
	 	break;
	 	
 	}
} 

function addToCart($item, $price){
	global $cart;
	$cart->addToCart($item, $price);
	echo $cart->totalPrice();
}
?>