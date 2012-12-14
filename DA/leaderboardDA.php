<?php
include_once("connector.php");

function clearBoard()
   {
	global $con;
	$isCleared = false;
	
	$query = "DELETE FROM Leaderboard";
		if(mysql_query($query,$con))
		       $isCleared = true;
		     
		     
	return $isCleared;
}

  function getAllLeaderboardEntries()
       {
		global $con;
		$query = "SELECT position,username,score FROM Leaderboard";
	    $result = mysql_query($query,$con);
		
		
		return $result;
	  }
	
	function populateLearderboardRow($username,$score,$position)
	     {
	      global $con;
			
		    $query = "INSERT INTO Leaderboard (username,score,position) VALUES('$username',$score,$position)";	
			mysql_query($query,$con);
			        
			        
			      
			        
			      
		}
		
		function getAllUsernameAndScoreInDesc()
		    {
			global $con;	
			$query = "SELECT username,score FROM PLayer ORDER BY score DESC";	
			$result = mysql_query($query,$con);
			
			return $result;	
			}

?>