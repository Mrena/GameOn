<?php

include("DA/gamesDA.php");

  function populateGames()
        {
		
   connect();
   $result = getAllGames();
   closeDB();
   
      if($result!=null)
           {
   echo "<table>";
   echo "<tr>";
   $multipleOfThree = 3;
   $count =0;
     
     while($row = mysql_fetch_array($result))
         {
          $name = $row[0];
          $link = $row[2];
          
          echo "<td><a href='$link'>$name </a> </td>"; 
          
		if($count==$multipleOfThree)
		    {
		     echo "</tr>";
		     echo "<tr>";
				$multipleOfThree += 3;
				
			}
				
			
			
		}
		echo "</tr>";
		     }
			else
	         echo "There are currently no games. System is down for repairs.";
		
   
		}

		
		
	
	
	function getDeveloperGames($developer_username)
	       {
			
		    connect();
	    	$result = getGamesByDeveloper($developer_username);
			closeDB();
			
			if($result!=null)
			      {
			$statusMessage = "";
			$count = 0;
			echo "<table class='text'>";
			echo "<tr><td colspan='3' style='width:25%'>Game No. </td><td colspan='3' style='width:25%'>Game </td><td colspan='3' style='width:25%'> Status </td></tr>";
			while($row = mysql_fetch_array($result))
			       {
				$name = $row[0];
                $link = $row[1];
				$status = $row[3];
				
			 $statusMessage = $status == 1 ? "Approved!" : "Pending approval.";  
			 $count++; 	
				
				echo "<tr><td colspan='3' style='width:25%'>$count</td><td colspan='3' style='width:25%'><a href='$link'>$name</a></td><td> $statusMessage </td></tr>";
				
					
					
					
				   }
		 echo "</table>";		   
				   }
			   else
				  echo "You currently have no games.";
			
			
			
		}
		
		function addGame($gameName,$gameURL,$owner)
		      {
			global $con;
			
			$query = "INSERT INTO Game (name,link,owner) VALUES('$gameName','$gameURL','$owner')";
			if(mysql_query($query,$con))
			     {
			      echo "Game added";
			   
			      }
				 else
				    {
				   echo "could not add new game";
				
				
				    }
		    	}


?>