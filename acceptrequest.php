<html>
<head>
<title> </title>

<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");
include_once("BL/buddyBL.php");

$requester = $_GET['requester'];
$buddy_f = $_GET['buddy_f'];

acceptRequest($requester,$buddy_f);

?>

</div>
</body>
</html>