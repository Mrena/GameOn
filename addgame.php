<!DOCTYPE html>
<html>
<head>
<title>Add Game </title>
<script type="text/javascript">
function validate()
      {
   var name =  document.getElementById("name").value;
   var gameURL = document.getElementById("url").value;
   var developerId = document.getElementById("developer_username").value;
    
   var isValid = true; 
   if(name==null||name=="")
   {
         document.getElementById("nameErr").innerHTML ="Please enter name";
         isValid = false;
         }
      if(gameURL==null||gameURL=="")
                {
             document.getElementById("urlErr").innerHTML = "Please enter URL.";
             isValid = false;
               }

        if(isValid)
            window.location = "addgame.php?name="+name+"&gameurl="+gameURL+"&developer_username="+developerId;
      return isValid;
        }
</script>
<?php
include("BL/gameBL.php");

    if(isset($_GET['name'],$_GET['gameURL']))
       {
		$gameName = $_GET['name'];
		$gameURL = $_GET['gameURL'];
		$owner = $_GET['developer_username'];
		
	     connect();
	     if(addGame($gameName,$gameURL,$owner))
	          echo "Game added";
	              else
	                 echo "Err adding your game. Please try again later.";
		 closeDB();	
		
	   }

?>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");



?>
<!--<form action="" method="POST">
<table>
<tr>
<td>Game Name: </td><td><input type="text" name="name" id="name" value="" /></td><td><span id="nameErr" style="color:red"> </span></td></tr>
<tr><td>Game URL </td><td><input type="text" name="url" id="url" value="" /></td><td><span id="urlErr" style="color:red"> </span> </td></tr>
<tr><td>Game Logo: </td><td><input type="file" name="logo" id="logo" /> </td></tr>
<tr><td><input type="hidden" name="developer_username" id="developer_username" value="<?php echo $_SESSION['username']; ?>"<td></tr>
<tr><td><input type="button" name="submit" value="Submit" onclick="validate()" /> </td><td></td></tr>
</table>
</form>-->
</div>
</body>