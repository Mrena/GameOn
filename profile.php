<html>
<head><title>Profile </title>


<script type="text/javascript" src="scripts/jquery-1.8.0.min.js"> </script>
<script type="text/javascript" src="scripts/editprofile.js"></script>

</head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");
include_once("BL/profileBL.php");

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border="0" align="left">
<tr><td>Username: </td><td><span id="username"><?php echo $user; ?>  </span> </td><td></td></tr>
<tr><td>Name: </td><td><span id="name"><?php echo $name ?> </span> </td><td><a href="#" id="1" onclick="onEdit(1)" >Edit </a> </td></tr>
<tr><td>Surname: </td><td><span id="surname"><?php echo $surname ?> </span> </td><td><a href="#" id="2" onclick="onEdit(2)">Edit </a> </td></tr>
<tr><td>Score: </td><td><span id="score"><?php echo $score ?></span> </td><td> </td></tr>
<tr><td>Rating: </td><td><span id="rating"><?php echo $rating ?></span> </td><td> </td></tr>
<tr><td>About Me: </td><td><span id="about"><?php echo $about ?></span> </td><td><a href="#" id="3" onclick="onEdit(3)">Edit </a> </td></tr>
<tr><td><input type="submit" name="submit" id="submit" value="Save" disabled/> </td></tr>
<tr><td>
<?php
echo "<br /><a href='friendlist.php?username=$username'> Your buddies</a>";
?> </td></tr>
</table>
</form>


</div>
</body>
</html>