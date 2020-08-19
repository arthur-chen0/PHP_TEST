<?php 

include($_SERVER['DOCUMENT_ROOT'] . "/Controller/cartController.php");

$cartController = new cartController();

if (isset($_POST['item'])) {

	// echo "Receive event: " . $_POST['item'];

	if ($_POST['item'] == "Checkout") {
		$cartController->listCart();
	}
	else{
		$cartController->addToCart($_POST['item'], $_POST['price']);
	}
} 

 ?>

