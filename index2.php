<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

$cartList = unserialize($_COOKIE['cart']);

include_once ($_SERVER['DOCUMENT_ROOT'] . "/View/checkoutView.html");

?>