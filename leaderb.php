<html><head><title>Leaderboard</title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>

<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<h3> LeaderBoard </h3>
<?php


include("leaderboard.php");

connect();
updateBoard();
viewboard(); 
closeDB();
include("menus/menu.php");

 
?>
</div>
</body>
</html>