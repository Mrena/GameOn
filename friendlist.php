<?php



?>
<html>
<head>

<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
 </head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");
include_once("BL/buddyBL.php");
	$username =	$_GET['username'];
	  connect();
      $result =	getAllBuddies($username);
      closeDB();
      
      echo "<br />$username's buddies: <br />";
      while($row =mysql_fetch_array($result))
           {
            if($username==$row[0])
			       $buddy = $row[1];
			       
			         else
			 			$buddy = $row[0];
			
		echo "<a href='profileviewer.php?profile=$buddy'>$buddy</a><br />";	
			
			
		 }

?>

</div>
</body>
</html>