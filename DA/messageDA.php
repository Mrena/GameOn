<?php
   include_once("connector.php");
   
   
   function sendTextMessage($to,$from,$message,$isRead)
            {
				global $con;
				
				
				
				 $query = "INSERT INTO Message(To_user,From_user,Message_m,Read_m) VALUES('$to','$from','$message',$isRead)";
				 if(mysql_query($query,$con))
				      echo "<br />Message sent <br />";
				      
				      else
				         echo "<br /> Message could not be sent<br />".mysql_error($con);
				
				
			}
			
			
	function getAllUnreadMessages($username)
	    {
			global $con;
		
		   
		  $query = "SELECT * FROM Message WHERE to_user = '$username' AND read_m=0";
		  $result =	mysql_query($query,$con);
			
			
		 return	$result; 
			
		}	
		
		function getAllMessages($username)
		   {
			global $con;
			
			  $query = "SELECT * FROM Message WHERE to_user = '$username'";
		      $result =	mysql_query($query,$con);
			
			return $result;
		  }	
		  
		  function markRead($message_id)
		     {
				
			global $con;
			
			
			$query = "UPDATE Message SET Read_m = 1 WHERE Message_id=$message_id";
			mysql_query($query,$con);
			        
					
				
				
				
			}
		
		
		function deleteMessage($message_id)
		    {
				global $con;
				
				$query = "DELETE FROM Message WHERE message_id=$message_id";
				mysql_query($query,$con);
				
				
			}
			
			function readMessageById($messageId)
			        {
					global $con;
					
					$query = "SELECT * FROM Message WHERE message_id = $messageId";
					$result = mysql_query($query,$con);
						
						
						
					return $result;	
						
					} 
				
				
			function addComment($postId,$message)
			     {
				 global $con;
				 
				 $query = "UPDATE Message SET Reply_m='$message' WHERE message_id = $postId";
				 mysql_query($query,$con);
				     //echo "comment added";
					 //else
					  // echo "Could not add comment ".mysql_error($con);	
					
					
				}	
   
   


?>