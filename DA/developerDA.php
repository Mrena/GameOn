<?php

include_once("connector.php");

		function getDeveloperByUsername($developer_username)
		      {
			    global $con;
				
				$query = "SELECT * FROM Developer WHERE username = '$developer_username'";
				$result = mysql_query($query,$con);
				
				
				return $result;
			}
			
			function registerDeveloper($developer_username)
			    {
				global $con;
				
				$query = "INSERT INTO Developer(username) VALUES('$developer_username')";
				if(mysql_query($query,$con))
				    return true;
					
					else 
					  return false;	
					
					
					
					
				}
				
				
				
?>				