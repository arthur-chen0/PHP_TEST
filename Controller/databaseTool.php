<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/Config/DB_config.ini.php";

class databaseTool{

    private static $instance;
    private $dbConfig;
    private $db;

    private function __construct()
    {
        global $dbDefauleConfig;
        $this->dbConfig = $dbDefauleConfig;
        // echo "From construct Host: " . $this->dbConfig['host'] . " User: " . $this->dbConfig['username'];
        $this->db = $this->create_connection();
    }

    public static function getInstance()
    {
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance; 
    }

    private function create_connection()
    {
        $db;
        $db = mysqli_connect($this->dbConfig['host'], $this->dbConfig['username'], $this->dbConfig['password']);
    
        mysqli_query($db, "SET NAMES utf8");
          
        return $db;
    }
  

    public function execute_sql($sql)
    {
        mysqli_select_db($this->db, $this->dbConfig['dbname']);
             
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

}
?>