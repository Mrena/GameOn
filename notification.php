
<html>
<head><title>Notifications </title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
 </head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");
include_once("BL/buddyBL.php");
?>
<h3>Notifications </h3>
<?php

$username = $_SESSION['username'];


displayNotifications($username);


?>
</div>
</body>
</html>