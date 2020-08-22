<?php 

include($_SERVER['DOCUMENT_ROOT'] . "/Controller/cartController.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/Model/products.php");

$cartController = new cartController();

if (isset($_POST['item'])) {

	echo "Receive event: " . $_POST['item'];

	if ($_POST['item'] == "Checkout") {
		$cartController->listCart();
	}
	else{
		$product = new products($_POST['item'], $_POST['price'],$_POST['url']);
		$cartController->addToCart($product);
	}
} 

 ?>

