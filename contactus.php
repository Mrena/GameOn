<!DOCTYPE html>
<html>
<head>
<title>Contact Us - GameOn </title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");

?>
<h3>Contact Us</h3>
<form>
<table class="text">
<tr><td>Name: </td><td><input type"text" name="name" id="name" /> </td> </tr>
<tr><td>Email Address: </td><td><input type="email" name="email" id="email" /> </td> </tr>
<tr><td>Subject: </td><td><input type="text" name="subject" id="subject" /> </td> </tr>
<tr><td>Message: </td><td><textarea name="message" id="message"> </textarea> </td></tr>
<tr><td><input type="submit" name="submit" value="Send" /> </td></tr>
</table>
</form>
</div>
</body>
</html>