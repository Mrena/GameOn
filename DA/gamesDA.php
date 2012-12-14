<?php
include_once("connector.php");


  function getAllGames()
     {
		global $con;
		
	$query = "SELECT * FROM Game WHERE status = 1"; //ORDERBY unique_visit_per_day DESC";
	$result = mysql_query($query,$con);	
		
		
	return $result;	
	}



  function getGamesByDeveloper($developer_username)
          {
			global $con;
			
			$query = "SELECT * FROM Game WHERE owner = '$developer_username'";
			$result =  mysql_query($query,$con);
				
			
			return $result;
			
		}
  

?>