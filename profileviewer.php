<html>
<head><title>Profile Viewer </title>
<?php

include_once("BL/profileviewerBL.php");
include_once("BL/buddyBL.php");

$viewer = $_SESSION['username'];
@$username = $_GET['profile'];

	connect();
	populateProfile();
	closeDB();



?>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />

</head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");



?>
<h3> Profile Viewer</h3>
<table border="0">
<tr><td>Username: </td><td><span id="username"><?php echo $_GET['profile']; ?>  </span> </td></tr>
<tr><td>Name: </td><td><span id="name"><?php echo $name ?> </span> </td></tr>
<tr><td>Surname: </td><td><span id="surname"><?php echo $surname ?> </span> </td></tr>
<tr><td>Score: </td><td><span id="score"><?php echo $score ?></span> </td></tr>
<tr><td>Rating: </td><td><span id="rating"><?php echo $rating ?></span> </td></tr>
<tr><td>About Me: </td><td><span id="about"><?php echo $about ?></span> </td></tr>
<tr><td>
<?php
$profile = $_GET['profile'];
echo "<br /><a href='friendlist.php?username=$profile'> $profile's buddies</a>";
?> </td></tr>
<?php

		if($_SESSION['username'] != $_GET['profile'])
		    {

  showAddBuddy($viewer,$_GET['profile']);

           }
?>
</table>
<?php
	if($_SESSION['username'] != $_GET['profile'])
		     {
				
			showMessanger();	
				
				
			}

?>
</div>
</body>
</html> 