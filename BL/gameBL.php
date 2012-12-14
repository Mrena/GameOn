<?php
$username="";
	if(isset($_SESSION['username']))
	     		{
		$username = $_SESSION['username'];
		  		}
		else
		  {
			
		echo "<script type='text/javascript'> window.location='login.php' </script>";		
		}
	
	
	if(isset($_POST['logout']))
	{
	 connect();
	 logout();
	 closeDB();

		}
	     
	     
	@$answer = $_POST['answer'];




	connect();
	if(!isset($answer))
		$generatedVal = shuffleGen();

 
	
	else
  		{
    
	chooseCheck($answer);
	
	$generatedVal = shuffleGen();
		}
 

	closeDB();








?>