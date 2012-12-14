<?php
include_once("connector.php");

		function validatePlayer($username,$password)
    			{
			global $con;
		
		$query = "SELECT username,password FROM Player WHERE username = '$username' AND password = $password LIMIT 1";
	    $result = mysql_query($query,$con); 
		
	  			return $result;	
				} 
				
				
		function validatePlayerByUsername($username)
		           {
					global $con;
					
					$query = "SELECT username FROM Player WHERE username = '$username'";
	                $result = mysql_query($query,$con);
				
			  return $result;	
				   }		
				
				
   function registerPlayerDA($username,$password)
           {
			global $con;
			$isRegistered = false;
			
			$query = "INSERT INTO Player (username,password) VALUES('$username',$password)";
	         if(mysql_query($query,$con))
	             $isRegistered = true;
			
			return $isRegistered;
		}				
	
	
   function loginPlayer($username)
    		{
	global $con;
	
	$isLogged = false;	
		
	$query = "UPDATE Player SET online = 1 WHERE username ='$username'";
	if(mysql_query($query,$con))
	        $isLogged=true;	
		
		return $isLogged;
			}
			
	function logoutPlayer($username)
	       {
			
			global $con;
	
	   $isLoggedOut = false;	
		
	 $query = "UPDATE Player SET online = 0 WHERE username ='$username'";
	 if(mysql_query($query,$con))
	        $isLoggedOut=true;	
		
		return $isLoggedOut;
			
			
		}			
	
	
	function getPlayerScore($username)
	      {
			global $con;
			$query = "SELECT score FROM Player WHERE username = '$username'";
	        $result = mysql_query($query,$con);
			
		return $result;	
		}
	
	function setPlayerScore($username,$score)
	     {
		global $con;
		$isSet = false;
		$query = "UPDATE Player SET score=$score WHERE username = '$username'";
	    
		if(mysql_query($query,$con))
		      $isSet = true;
	    	
			
		return $isSet;	
			
		}
	
	function getAllOnlinePlayers()
	      {
			global $con;
			
			$query = "SELECT username FROM PLayer WHERE online = 1";
		    $result = mysql_query($query,$con);
	 
		return $result;	
		}




?>