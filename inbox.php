<html> 
<head><title>Messages </title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
<style type="text/css">
#page {background-image{white.png;}
</style>
</head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<h3>Messages </h3>
<?php

include_once("DA/messageDA.php");

    connect();
   $result = getAllMessages($_SESSION['username']);
   closeDB();
   $count = 1;
   $start = "";
   echo "<table>";
   while($row = mysql_fetch_array($result))
        {
         if($row[3]==1)
             $start = "*";
         
		echo "<tr><td>$count</td><td><a href='messageReader.php?message=$row[2]&from=$row[1]&id=$row[4]'>$row[1]</a>$start</td></tr>";	
			
		$count++;	
		}
		
	echo "</table>";	
   


include("menus/menu.php");
?>
</div>
</body>
</html>