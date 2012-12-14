<?php

include("DA/leaderboardDA.php");

	 $username;
	 $score;
	 $position;
	 $minPos;
	 $maxPos;
	
 

	 function updateBoard()
				{
      global $con;
	// select all rows in player table, sort in descending order
	// by score
	// and then from the first to the tenth insert each row
	// to the leaderboard table incrementing the position by one 
	
	
		     $isCleared = clearBoard();
		            if(!$isCleared)
		               echo("error clearing leaderboard ".mysql_error($con)."\n");
		      
		      $result = getAllUsernameAndScoreInDesc();
		      
		      if($result!=null)
		        {
				 		      		      		      
		      $i=1;
		      while($i<11 && $row = mysql_fetch_array($result))
		        	{
									
				populateLearderboardRow($row[0],$row[1],$i);
													
				$i++;	
					
					
					}
		      
		       }
		       else
		          echo "err in pulling results ".mysql_error($con)."\n";
	
	
	
			}


 	function viewBoard()
			{
 		global $con;
	
	
	$result = getAllLeaderboardEntries();
	echo "<table border='5' height='200' width='300' >";
	echo "<tr><td >Position</td><td>Username</td><td>Score</td></tr>";
	while($row = mysql_fetch_array($result))
	 			{
	  echo "<tr><td>$row[0]</td><td><a href='profileviewer.php/?profile=$row[1]'>$row[1]</a></td><td>$row[2]</td></tr>";
		
		
		
		
				}
	echo "</table>";
	
	
		}
	
	
	




?>