<?php


	include_once("BL/player.php");
	include_once("DA/profileDA.php");
	
	$username = "";
    if(isset($_SESSION['username']))
	     		{
		$username = $_SESSION['username'];
		  		}
		else
		  {
			
		echo "<script type='text/javascript'> window.location='login.php' </script>";		
		}

	connect();
	$user = $_SESSION['username'];
	$name;
	$surname;
	$rating;
	$about;
	$score;
	function populateProfile()
    	{
	global $con,$user,$name,$surname,$rating,$about,$score;
		
	
  	
	
  $result =	getProfile($user);
  $row = mysql_fetch_array($result);
  
  $score = $row[2];
  $name = $row[0];
  $surname = $row[1];
  $rating = $row[3];
  $about = $row[4];
  
  
 
		
		}
	
	
	
	function saveProfile($name,$surname,$about)
	  	{
	   	global $con,$user;
		
		
		
		    $isUpdated = updateProfile($user,$name,$surname,$about);
		   
		
			    if($isUpdated)
			         {
					echo "Profile saved";
				    populateProfile();
				    
		              }
		              else 
		                {
							
						echo "could not update Profile";	
						}
					closeDB();
		}
		
		
	
	populateProfile(); 
	
	
	if(isset($_POST['submit']))
	    {
			
		$nameVal =  isset($_POST['name']) ? $_POST['name'] : $name;
		$surnameVal = isset($_POST['surname']) ? $_POST['surname'] : $surname;
		$aboutVal = isset($_POST['about']) ? $_POST['about'] : $about;
	    $nameVal =	strip_tags($nameVal);
		$surnameVal =  strip_tags($surnameVal);
		$aboutVal =  strip_tags($aboutVal);
		saveProfile($nameVal,$surnameVal,$aboutVal);	
			
		}





?>