<html><head> <title> Car Racing</title>
<?php
// have to change this to reflect the root directory of the project 
//chdir("C:\wamp\www\PigLatin");
//$playerDir = getcwd()."\BL\player.php";
//include($playerDir);

include("BL\player.php");

$username = "";
if(isset($_SESSION['username']))
	     		{
		$username = $_SESSION['username'];
		  		}
		else
		  {
			
	//	echo "<script type='text/javascript'> window.location='login.php' </script>";		
		}
	
	if(isset($_POST['logout']))
	{
	 connect();
	 
	 logout();
	 closeDB();

		}

?>



<script type="text/javascript" src="CarRacing/GameControl.js"> </script>
<script type="text/javascript" src="CarRacing/Car.js"> </script>
<script type="text/javascript" src="CarRacing/ControlledCar.js"> </script>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />

</head>
<body onload="constructRoad();">
<div id="page">
<?php
include("menus/topmenu.php");

?>

<div id="page">
<div id="game">
<form align="center">
<select id="level" onchange="setFrequency();">
<option value="0" selected>Select level</option>
<option value="1200"> Level 1</option>
<option value="1000"> Level 2</option>
<option value="500"> Level 3</option>
<option value="250"> Level 4</option>
<option value="200"> Level 5</option>
</select> 
</form>
<table align="center" id="road" border="0">
<tr ><td id="10"> </td><td id="20"> </td><td id="30"> </td></tr>
<tr><td id="11"> </td><td id="21"> </td><td id="31"> </td></tr>
<tr><td id="12"> </td><td id="22"> </td><td id="32"> </td></tr>
<tr><td id="13"> </td><td id="23"> </td><td id="33"> </td></tr>
</table>
<table align="center">
<tr>                                                                                                           
<td><button disabled="true" onclick="startGame();" id="btnSp">Start Game </button></td>
<td><button disabled="true" onclick="pauseGame();" id="btnSpause">Pause </button></td>
</tr>
</table> 
<div align="center" id="timer"> </div>
<table align="center">
<tr>
<td> </td>
<td> <button id="2" disabled="true" onclick="chooseMovement(2)">Up</button></td>
<td> </td>
<tr>
<td> <button id="4" disabled="true" onclick="chooseMovement(4)">Left</button></td>
<td> </td>
<td><button id="6" disabled="true" onclick="chooseMovement(6)">Right</button> </td></tr>
<tr>
<td> </td>
<td> <button id="8" disabled="true" onclick="chooseMovement(8)">Down</button></td>
<td> </td>
</table>
<div>
</div>
</div>
</body>
</html>