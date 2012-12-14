<?php
include_once("connector.php");


  function getProfile($username)
      {
		global $con;
	$query = "SELECT name, surname, score, rating, about FROM Player WHERE username = '$username'";	
	
  $result =	mysql_query($query,$con);	
	
  return $result;	
		
	}
	
  function updateprofile($user,$name,$surname,$about)
	   {
	    global $con;
		$isUpdated = false;
		
	$query = "UPDATE Player SET name = '$name' ,surname = '$surname',about = '$about' WHERE username = '$user'";	
	 if(mysql_query($query,$con))
	         $isUpdated = true;	
		
	return $isUpdated;	
	}

?>