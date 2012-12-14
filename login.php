<!DOCTYPE html>
<html><head><title>Login </title>
<?php
include_once("BL/player.php");
include_once("connector.php");

@$logout = $_GET['logout'];

if(isset($logout))
    {
		
	connect();
	logout();
	closeDB();	
		
	} 

function autoLogin()
      {
@$usernameCookie = $_COOKIE['username'];
@$passwordCookie = $_COOKIE['password'];

if(isset($usernameCookie) && isset($passwordCookie) && !isset($_POST['submit']))
    {
		
		



		
	return true;	
		
		
	}
	
	return false;
	
}	

@$username = $_POST['username'];
@$password = $_POST['password'];

if(isset($username) && isset($password))
{
 
$submit = $_POST['submit'];
//$username = $_POST['username'];
//$password = $_POST['password'];
if($username==""||$password=="")
			{
      echo "Enter username or password";
      echo "<div id='page'>";
      echo "<h1 align='left'>GameOn</h1>
           <h3 align='left' style='color:powderblue;'>A world to offer</h3>";
      displayForm();
      echo "</div>";
      return;
      		}

$username = strip_tags($username);
$password = strip_tags($password);
$username = trim($username);
$password = trim($password);
@$remember = $_POST['remember'];
if(isset($remember))
  {
	
	setcookie("username","$username");
	setcookie("password","$password");
	
	
	}
else 
    {
		unset($_COOKIE['username']);
		unset($_COOKIE['password']);
	}


connect();
login($username,$password);
closeDB();


}
                      

?>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>

<div id="page">
<h1 align="left">GameOn</h1>
<h3 align="left" style="color:powderblue;">A world to offer</h3>

<h4>Login </h4>
<?php


 $isTrue = autoLogin();
  if($isTrue==true)
       {
        
        @$usernameCookie = $_COOKIE['username'];
		@$passwordCookie = $_COOKIE['password'];
        
    echo "<table border='0'>
<form action='' method='POST'>
<tr><td>Username: </td><td><input type='text'  name='username' value='$usernameCookie' /> </td><td><div id='errUsername'> </div></td></tr>
<tr><td>Password: </td><td><input type='password'  name='password' value='$passwordCookie' /></td><td><div id='errPassword'> </div></td></tr>
<tr><td><input type='checkbox' name='remember' /></td><td>Remember me</td></tr>
<tr><td></td><td><a href='register.php'>Not registered?</a></td><td><a href='passwordRe.php'>Forgot password?</a></td></tr>
<tr><td><input type='submit' name='submit' value='Login'  /></td></tr>";
       }
     
     else
       {
		
		
displayForm();
		
	}
	
	function displayForm()
	   {
		
		
			echo "<table border='0'>
<form action='' method='POST'>
<tr><td>Username: </td><td><input type='text' id='username' name='username' value='' /> </td><td><div id='errUsername'> </div></td></tr>
<tr><td>Password: </td><td><input type='password' id='password' name='password' value='' /></td><td><div id='errPassword'> </div></td></tr>
<tr><td><input type='checkbox' name='remember' /></td><td>Remember me</td></tr>
<tr><td></td><td><a href='register.php'>Not registered?</a></td><td><a href='passwordRe.php'>Forgot password?</a></td></tr>
<tr><td><input type='submit' name='submit' value='Login' /></td></tr>
</form>
</table>";	
		
	}

?>

</div>
</body>
</html>