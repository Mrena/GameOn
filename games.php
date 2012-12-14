<html>
<head><title> </title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<h3>Games </h3>
<?php
include("BL/gamesBL.php");

   populateGames();
   
?>
</div>
</body>
</html>