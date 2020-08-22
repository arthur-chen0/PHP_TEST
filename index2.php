<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
include($_SERVER['DOCUMENT_ROOT'] . "/Controller/cartController.php");

// $cartList = unserialize($_COOKIE['cart']);
$cartController = new cartController();
$cartList = $cartController->listCart();
// var_dump($cartList);

include_once ($_SERVER['DOCUMENT_ROOT'] . "/View/checkoutView.html");

?>