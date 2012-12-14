<?php

?>
<html>
<head> 
<script type="text/javascript">
/*function validate()
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
            window.location = "addnewgame.php?name="+name+"&gameurl="+gameURL+"&developer_username="+developerId;
      return isValid;
        }*/
</script>


<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
include_once("menus/topmenu.php");



include("BL/gamesBL.php");

    if(isset($_POST['name'],$_POST['gameUrl']))
       {
		$gameName = $_POST['name'];
		$gameURL = $_POST['gameUrl'];
		$owner = $_SESSION['username'];
		
	     connect();
	     addGame($gameName,$gameURL,$owner);
	          /*echo "Game added";
	              else
	                 echo "Err adding your game. Please try again later.";*/
		 closeDB();	
		
	   }



?>
<h3>Add New Game </h3>
<br />
<table>
<form action="" method="POST"> 
<tr>
<td> Game Name: </td><td><input type="text" name="name" id="name" value="" /></td><td><span id="nameErr" style="color:red"> </span></td></tr>
<tr><td>Game URL </td><td><input type="text" name="gameUrl" id="url" value="" /></td><td><span id="urlErr" style="color:red"> </span> </td></tr>
<tr><td>Game Logo: </td><td><input type="file" name="logo" id="logo" /> </td></tr>
<tr><td><input type="hidden" name="developer_username" id="developer_username" value="<?php echo $_SESSION['username']; ?>"<td></tr>
<tr><td><input type="submit" name="submit" value="Submit"  /> </td><td></td></tr>
</form>
</table>

</div>
</body>
</html>