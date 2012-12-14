
<html>
<head><title>GameOn </title>
<?php
     
	include_once("connector.php");
	include_once("BL/piglatin.php");
	include_once("BL/gameBL.php");
	
?>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
 </head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");

?>
<table>
<tr>
<td><?php echo "Logged as <a href='profile.php'>".$username."</a>"; ?></td>
<td><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="submit" name="logout" value="logout" />
</form> 
<td>
</tr>
</table>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
<tr><td><div id="genName"><?php if($generated==1) {echo "Word"; $generatedVal = str_shuffle($generatedVal); } else { echo "Latin"; $generatedVal = strrev($generatedVal);  }?>  </div></td><td><?php echo $generatedVal; ?> </td></tr>
<tr><td>Answer: </td><td><input type="text" name="answer" /> </td></tr>
<tr><td><input type='submit' name='submit'  value="Submit" /> </td> </tr>
</form>
</table>
<?php include_once("menus/menu.php"); ?> 
</div>
</body>
</html>