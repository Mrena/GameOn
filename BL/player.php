<?php

include_once("DA/playerDA.php");



$username;
$password;
$score;
$con;

	function showPlayer()
	   {
		global $username;
		$username = $_SESSION['username'];
		echo "<table>";
		echo "<tr><td>Logged as <a href='\PigLatin\profile.php'>$username</a></td></tr>";
		echo "</table>";
		
	}
 	
 	
  function login($username,$password)
        {
	 
	
	$result = validatePlayer($username,$password);
	
	

	if($row = mysql_fetch_array($result))
 			{
 			 
 			 $_SESSION['username'] = $username;
 			 $_SESSION['password'] = $password;
	
	  loginPlayer($username);
	      
         header('Location: home.php');
	
 			}
			 else
			 {
				echo "incorrect username or password";
				
			}	
	
       }

 function logout()
			{
			  
			      @$username = $_SESSION['username'];
 
			      session_unset();
			      logoutPlayer($username);
						
	
			}

 function incrementScore($username)
			{
			 global $con;
	
	 $result = getPlayerScore($username);
	 $row = mysql_fetch_array($result);
	 if($row[0]==null)
	   $row = 0;
	 $score = $row[0];
	 $score++;
	
	 if(!setPlayerScore($username,$score))
	     echo "could not update score ".mysql_error($con);
		
	
	
			}
			
	function decrementScore($username)
	    {
				 global $con;
	
	$result = getPlayerScore($username);
	$row = mysql_fetch_array($result);
	if($row[0]==null)
	   $row = 0;
	$score = $row[0];
	$score--;
	
	if(!setPlayerScore($username,$score))
	     echo "could not update score ".mysql_error($con);	
			
			
			
			
		}		

 function registerPlayer($username,$password)
			{
			 global $con;
			 

	 $result = validatePlayerByUsername($username);
	
	$row = mysql_fetch_array($result);
	if($row[0]==$username)
	 			{
		echo "User exists";
		
	 			}
	 	else
	 			{
	  
	
	
	     		
	  
	 	  if(registerPlayerDA($username,$password))
   	            echo "You have successfully registered";	
		
	 			
	 			
	 	}		
	 
	}
	
	function playersOn()
	  {
		
		global $con;
		
		 $result = getAllOnlinePlayers();
		 echo "<br /><div style='text-align:left;'>";
	     echo "Players online: ";
	     while($row = mysql_fetch_array($result))
	      {
			
		echo "<a href='profileviewer.php?profile=$row[0]'> $row[0]</a>";	
			
		  }
		
		
		echo "</div><br />";
		
		
		
	} 
	



?>


