
<html><head><title>Admin </title></head>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<h3>Admin Area </h3>
<p>Add Item </p>
<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
<table border="0">
<tr><td>Word: </td><td><input type="text" name="word" /> </td></tr>
<tr><td>Latin: </td><td><input type="text" name="latin" /></td></tr>
<tr><td><input type="submit" name="submit" value="Add" /></td></tr>
</table>
</form>
<?php

include("BL/wordBL.php");



@$submitVal = $_POST['submit'];
@$latinVal = $_POST['latin'];
@$wordVal = $_POST['word'];

if(strlen($wordVal)>1 || strlen($latinVal)>2)
      {
       
		connect();
		addComb($wordVal,$latinVal);
		
		
		
	}
	
	else 
	   {
		
		echo "Enter latin and word<br />";
		
		
	}
	
	

?>

<?php
 include("menus/adminmenu.php");
 include("menus/menu.php"); ?>
 </div>
</body>
</html>