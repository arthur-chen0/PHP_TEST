<?php 
include ("cart.php");
include ("error_logs.php");

$cart = new cart;
$log = new error_logs;

if (isset($_POST['action'])) {
	$log->write($POST['action']);
 	switch ($_POST['action']) {
	 	case 'Iphone8':
	 		echo "fuck <br>";
		 	addToCart("Inpone 8",22000);
		 	$log->write("addToCart iphone 8");
	 	break;
	 	case 'Iphone11pro':
	 		echo "fuck <br>";
		 	addToCart("Inpone 11 pro",22000);
		 	$log->write("addToCart iphone 11 pro");
	 	break;
	 	
 	}
} 

function addToCart($item, $price){
	echo "add to cart success <br>";
	$log->write("add to cart success");
}
?>