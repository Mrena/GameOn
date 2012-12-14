<?php
session_start();
$dbname = "GameOn";
$con; 
$projectDirectory = "C:\wamp\www\PigLatin";

function connect()
{
 global $con,$dbname;
	
	$con = mysql_connect("localhost","root","");
		if(!$con)
		 {
		die("Could not connect.");	
			
		 }
		 mysql_select_db($dbname,$con);
	
}

function closeDB()
			{
			 global $con;
			 
 	mysql_close($con);
			
	
			}

?>	