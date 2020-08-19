<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
include_once($_SERVER['DOCUMENT_ROOT'] . "/Model/baseModel.php");

class productionModel extends baseModel{

    public function getAllProduction(){
        $result = $this->db->execute_sql("SELECT * FROM products");

        $total_records = mysqli_num_rows($result);
        $productonMap;

        for ($i = 0; $i < $total_records; $i++){
            $data = mysqli_fetch_assoc($result);
            $productonMap[$data['name']] = $data['price'];
        }

        return $productonMap;
    }

}

?>
