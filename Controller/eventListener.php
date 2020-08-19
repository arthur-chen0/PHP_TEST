<?php 

include($_SERVER['DOCUMENT_ROOT'] . "/Controller/service.php")

if (isset($_POST['item'])) {

	if ($POST['item'] === "Checkout") {
		totalPrice();
	}
	else{
		addToCart($POST['item'], $POST['price']);
	}
} 
 ?>