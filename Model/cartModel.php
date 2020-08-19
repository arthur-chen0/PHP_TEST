<?php 
class cartModel{

private static $cartMap;
// static $logs = new error_logs;

    public function addToCart($item, $price){
        self :: $cartMap = unserialize($_COOKIE['cart']);
        // echo "get cookie from cart ";
        // var_dump(self :: $cartMap);
        // echo "<br>";
        self :: $cartMap[$item] = $price; 
        setcookie("cart",serialize(self :: $cartMap),time() + (3600 * 5), "/");
        // echo "get map after add ";
        var_dump(self :: $cartMap);
        // echo "<br>";

    }

    public function removeCart($item, $price){
        self :: $cartMap[$item] = 0;
    }

    public function totalPrice(){
        $cartData = unserialize($_COOKIE['cart']);
        var_dump($cartData);

        $totalPrice = 0;
        foreach ($cartData as $item => $price) {
            $totalPrice += $price;
        }	
	// $logs->log("Total price is " . $totalPrice);
        return $totalPrice;
    }

    public function getCart()
    {
        $cartData = unserialize($_COOKIE['cart']);
        return $cartData;
    }

}

?>