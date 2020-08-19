<?php 
/**
 * Production Controller
 */
include_once($_SERVER['DOCUMENT_ROOT'] . "/Model/productionModel.php");
class productionController
{
	// echo $_SERVER['DOCUMENT_ROOT'] . "../Model/productionModel.php";
	public $list;
    
    public function listProduction(){

    	$productionModel = new productionModel();
    	$list = $productionModel->getAllProduction();

    	include_once ($_SERVER['DOCUMENT_ROOT'] . "/View/main.html");
    }
}
 ?>