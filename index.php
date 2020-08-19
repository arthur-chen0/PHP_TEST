<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/Controller/productionController.php";

$productionController = new productionController();

$productionController->listProduction();

 // $db = new databaseTool;

 // $link = create_connection();
 
 // $map;

// include_once ($_SERVER['DOCUMENT_ROOT'] . "/View/main.html");


?>





