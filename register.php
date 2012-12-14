<?php


include("BL/player.php");
if(isset($_POST['submit'])&&isset($_POST["username"])&&isset($_POST["password"]))
     	{
$usernameVal = $_POST["username"];
$passwordVal = $_POST["password"];
$email = $_POST['email'];


connect();

registerPlayer($usernameVal,$passwordVal);
closeDB();

		}
?>
<html><head><title>Register</title></head>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
<body>
<div id="page">
<h1 align="left">GameOn</h1>
<h3 align="left" style="color:powderblue;">A world to offer</h3>
<form method="POST" action=""<?php $_SERVER['PHP_SELF']; ?>"> 
<table border="0">
<tr><td>Username: </td><td><input type="text" name="username" id="username" /> </td></tr>
<tr><td>Password: (Numeric)</td><td><input type="password" name="password" id="password" /></td></tr>
<tr><td>Email Address: </td><td><input type="email" name="email" id="email" /></td></tr>
<tr><td><input type="submit" name="submit" value="Register" /></td></tr>
<tr><td><a href="login.php"> Login</a></td></tr>
</table>
</form>
</div>
</body>
</html>