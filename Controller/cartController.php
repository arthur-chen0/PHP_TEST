<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);


include_once ($_SERVER['DOCUMENT_ROOT'] . "/Model/cartModel.php");
class cartController
{
    public $cartList;

    public function addToCart($product)
    {
    	$cart = new cartModel();
    	$cart->addToCart($product);
    }

    public function totalPrice()
    {
    	$cart = new cartModel();
    	echo $cart->totalPrice();
    }

    public function listCart()
    {
    	$cart = new cartModel();
    	$cartList = $cart->getCart();
    	// var_dump($cartList);
    	return $cartList;
    	// include_once ($_SERVER['DOCUMENT_ROOT'] . "/View/checkoutView.html");
    }
}
?>