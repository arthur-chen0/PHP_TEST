<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

// include ("production.php");

// $production = new production;

// $production->addItem("Iphone8",22000);
// $production->addItem("Iphone11",31000);
// $production->addItem("Iphone11pro",39000);

// $map = $production->getAllItem();

include $_SERVER['DOCUMENT_ROOT'] . "/Controller/databaseTool.php";


 // $db = new databaseTool;

 $link = create_connection();
 $result = execute_sql($link, "SELECT * FROM products");

 $total_records = mysqli_num_rows($result);

 $map;

 for ($i = 0; $i < $total_records; $i++){
 	$data = mysqli_fetch_assoc($result);
 	$map[$data['name']] = $data['price'];
 }

include_once ($_SERVER['DOCUMENT_ROOT'] . "/View/main.html");
?>





