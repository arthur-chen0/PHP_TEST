<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include_once ("production.php");

$production = new production;

$production->addItem("Iphone8",22000);
$production->addItem("Iphone11",31000);
$production->addItem("Iphone11pro",39000);

$map = $production->getAllItem();

include_once ("main.html");
?>





