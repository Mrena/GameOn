<?php
    
    include('BL/gamesBL.php');

   @$developer_username = $_SESSION['username'];

?>
<!DOCTYPE html> 
<html>
<head><title> Developer DashBoard </title>

<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");
include("BL/developerBL.php");
  connect();
 $result = getDeveloperByUsername($developer_username);
 
   if(!$row = mysql_fetch_array($result))
       {
		
	  $registered = registerDeveloper($developer_username);	
	  closeDB();
	  echo $registered ? "You have successfully registered as a Developer" : " ";
	  
	  }


?>
<h3>Developer DashBoard </h3>
<?php
$username = $_SESSION['username'];
echo "<table>
<tr><td><a href='addnewgame.php'> Add New Game</a> | </td><td> </td><td> </td><td><a href='developerprofile.php?username=$username'>Developer Profile </a> | </td></tr>
</table>";

?>
<h4>Your Games: </h4> 
<?php
     
     getDeveloperGames($developer_username);
     
?>
</div>
</body>
</html>