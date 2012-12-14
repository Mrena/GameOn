<?php
	include_once("connector.php");
	
	function getBuddyStatus($viewer,$username)
	      {
		 global	$con;
		 
		 
		 $isBuddy=0;
		 $query = "SELECT status FROM Buddy WHERE requester=$viewer AND buddy=$username LIMIT 1";
		 
		 $result = mysql_query($query,$con);
		 if($result==null)
		      {
		      $query = "SELECT status FROM Buddy requester=$username AND buddy=$viewer LIMIT 1";
		      $result = mysql_query($query,$con);
		      
		      }
		 
		 if($result!=null)
		         {
		       $row = mysql_fetch_array($result);
			      
		       $isBuddy = $row[0];
		       
		       }
			
			
			return $isBuddy;
		  }
		
		function addBuddyRequest($requester,$buddy)
		  {
			global $con;
			$isAdded;
			$status = 0;
			
			$query = "INSERT INTO Buddy (requester,buddy_f,status) VALUES('$requester','$buddy',$status)";
			
		    if(mysql_query($query,$con))
		             $isAdded = true;
		             else
		                $isAdded = false;
		                
		                return $isAdded;
			
			
		     }
		     
		     function getAllBuddyRequest($username)
		           {
					global $con;
					
					$query = "SELECT * FROM Buddy WHERE buddy_f = '$username' AND status=0 LIMIT 1";
				    $result =	mysql_query($query,$con);
				    
				    if($result==null)
				       echo mysql_error($con);
					
					
					return $result;
					
				   }
				   
				   function setAsBuddies($requester,$buddy_f)
				         {
						global $con;
						$isAdded = false;
						
						    $query = "UPDATE Buddy SET status = 1 WHERE Requester='$requester' AND Buddy_f='$buddy_f'";	
							if(mysql_query($query,$con))
							        $isAdded = true;
							        
							
						return $isAdded;	
							
						}
					
					function getAllBuddies($username)
					      {
							
							global $con;
					
					$query = "SELECT * FROM Buddy WHERE buddy_f = '$username' OR requester='$username' AND status=1";
				    $result =	mysql_query($query,$con);
				    
				    if($result==null)
				       echo mysql_error($con);
					
					
					return $result;
							
							
							
						}

?>