<?php
function checkLogged()
   	{
	$username="";
	if(isset($_SESSION['username']))
	     		{
		$username = $_SESSION['username'];
		  		}
		else
		  {
			
		echo "<script type='text/javascript'> window.location='login.php' </script>";		
		}
	}



?>