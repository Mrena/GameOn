<?php
include_once("DA/messageDA.php");

  function  countUnreadMessages($username)
       {
		
		
		$messageCount = 0;
	    connect();
	    $result = getAllUnreadMessages($username);
    
	    while($row = mysql_fetch_array($result))
	           $messageCount++;
        closeDB();
		
	  return $messageCount;	
	}
	
	function addTime($message)
	         {
				
		 $message .= "<br />";
         $date = date('r');
         $date = substr($date,0,strlen($date)-5);;
         $message .= "$date"; 
         
         
         return $message;
				
				
			}
			
			function displayComments($postId)
			    {
					
					
					connect();
    				$result = readMessageById($postId);
					closeDB();
					if($post = mysql_fetch_array($result))
	   						 {
			
					$from = $post[1];
					$message = $post[2];
					$comments = $post[3];
	
	    			echo "<div class='text'><br />";
	   				echo "<a href='profileviewer.php?profile=$from'>$from</a>";
					echo "<br />";
					echo $message."<br />"; 
					echo $comments;	
					echo "<br />Reply:<br />";
					echo "<form action='' method='POST'>";
					echo "<textarea  name='reply'> </textarea>";
					echo "<input type='hidden' name='postId' value='$postId' />";
					echo "<input type='submit' name='submit' value='Send' />";
					echo "</form></div>";
		
			
			
								}
		
					
					
				}
				
				function writeComment($postId,$from,$reply)
				      {
						
				
			connect();
	    	$result = readMessageById($postId);	
		   	closeDB();
	 	if($post = mysql_fetch_array($result))
	             				{
			
		
		 $lastReply = $post[3];
		 $message = $lastReply;
		 $reply = addTime($reply);
		 $message .= "<br /> <a href=\'profileviewer.php?profile=$from\'>$from</a><br />$reply";
		
		 
		
		 connect();
		 addComment($postId,$message);
		 closeDB();
		
		       	
				
						
						
			    				}
		
		  				}

?>