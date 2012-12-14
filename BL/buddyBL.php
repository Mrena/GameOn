<?php
include_once("DA\buddyDA.php");


 function showAddBuddy($viewer,$username)
   {
	
    connect();
    $areBuddies = getBuddyStatus($viewer,$username);
   // echo "<script type='text/javascript'> alert($areBuddies); </script>";
    closeDB();
    if($areBuddies == false)
                  {
                   
        		echo "<tr><td><a href='\GameOn\buddyadder.php?requester=$viewer&buddy=$username'> Add $username as your buddy </td></tr>";
        
        
                  }
	
	
  }
  
  function getBuddyRequestNum($username)
       {
		
		$count = 0;
		connect();
		$result = getAllBuddyRequest($username);
		closeDB();
		if($result!=null)
		   {
			while($row=mysql_fetch_array($result))
			      $count++;
		   }
		
		
		return $count;
	}
	
	function displayNotifications($username)
	           {
	            
	            
	            
			connect();
			$result = getAllBuddyRequest($username);
			closeDB();
			if($result!=null)
			     {
			     
	            
			      
			      echo "<table>";
				while($row=mysql_fetch_array($result))
				         {
				          $requester = $row[0];
				          $buddy_f = $row[1];
				          
					echo "<tr><td><a href='profileviewer.php?profile=$requester'>$requester</a> wants to be your buddy </td><td><a href='acceptrequest.php?requester=$requester&buddy_f=$buddy_f'>Accept</a> |</td><td><a href='declinerequest.php?requester=$requester&buddy_f=$buddy_f'>Not now</a></td></tr>";		
							
							
						} 	
					echo "</table>";
					
					
				}
				else
				   echo "You have no buddy request.";
			
		
				
				
				
		    	}
		    
		    function acceptRequest($requester,$buddy_f)
		          {
					
					
					connect();
				  $added =	setAsBuddies($requester,$buddy_f);
					closeDB();
					
					if($added)
					    echo "You are now friends with $requester";
					
					
				  }


?>