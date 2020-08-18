<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/Controller/DB_config.php";

    function create_connection()
  {
  	global $_DB;
    $link = mysqli_connect($_DB['host'], $_DB['username'], $_DB['password']);
    // var_dump($link);
    // echo "<br>";
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	

  function execute_sql($link, $sql)
  {
  	global $_DB;
    mysqli_select_db($link, $_DB['dbname']);
    //   or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
    // var_dump($result);
		
    return $result;
  }
?>