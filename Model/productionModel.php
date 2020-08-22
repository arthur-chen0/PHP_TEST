<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

include_once($_SERVER['DOCUMENT_ROOT'] . "/Model/baseModel.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/Model/products.php");

class productionModel extends baseModel
{

    public function getAllProduction()
    {
        $result = $this->db->execute_sql("SELECT * FROM products");

        $total_records = mysqli_num_rows($result);
        $productionMap;

        for ($i = 0; $i < $total_records; $i++){
            $data = mysqli_fetch_assoc($result);
            // $productonMap[$data['name']] = $data['price'];
            $products = new products($data['name'], $data['price'], $data['url']);
            $productionMap[] = $products;
        }

        return $productionMap;
    }

}

?>
