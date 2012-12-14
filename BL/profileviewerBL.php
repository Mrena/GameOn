<?php
include_once("DA/profileDA.php");
include_once("DA/messageDA.php");
$name;
	$surname;
	$rating;
	$about;
	$score;
	function populateProfile()
    	{
	global $con,$username,$name,$surname,$rating,$about,$score;
		
	
  $result = getProfile($username);
  
  
  
  
  $row = mysql_fetch_array($result);
  
  $score = $row[2];
  $name = $row[0];
  $surname = $row[1];
  $rating = $row[3];
  $about = $row[4];
  
  
 
		
		}

     if(isset($_POST['to'],$_POST['from'],$_POST['message']))
        {
			$to = $_POST['to'];
			$from = $_POST['from'];
			$message = $_POST['message'];
			
			// validate all this...
			
			
			 connect();
			 $message .= "<br />";
             $date = date('r');
             $date = substr($date,0,strlen($date)-5);;
             $message .= "$date";
			 sendTextMessage($to,$from,$message,0);  
			 closeDB();
		}
		
	
			
			function showMessanger()
			    {
				global $username,$viewer;	
					
			echo "<p> Send a text to this user: </p>
<form action='' method='POST'>
<input type='hidden' name='to' value='$username' />
<input type='hidden' name='from' value='$viewer' />
<textarea name='message' clos='50' rows='5' > </textarea>
<input type='submit' name='submit' value='Send' />
</from>";
				}
			
		
	

?>