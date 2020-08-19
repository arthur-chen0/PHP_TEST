<?php 
/**
 * Base Model
 */
include_once($_SERVER['DOCUMENT_ROOT'] . "/Controller/databaseTool.php");

class baseModel
{
    protected $db;

    public function __construct()
    {
        $this->initDB();
    }

    private function initDB(){
        $this->db = databaseTool::getInstance();
    }
}

 ?>