<h1 align="left">GameOn</h1>
<h3 align="left" style="color:powderblue;">A world to offer</h3>

<?php
include_once("BL/player.php");
include_once("BL/messageBL.php");
include_once("BL/buddyBL.php");


$username = "";
if(isset($_SESSION['username']))
	     		{
		$username = $_SESSION['username'];
		  		}
		else
		  {
			
		echo "<script type='text/javascript'> window.location='login.php' </script>";		
		}
	
	if(isset($_POST['logout']))
	{
	 connect();
	 
	 logout();
	 closeDB();

		}
	
	$buddyRequestNum = getBuddyRequestNum($username);
     
    $counted =  countUnreadMessages($username);

?>


<table id="tableLogged" align="left" >
<tr>
<td><?php echo "Logged as <a href='profile.php'>".$username."</a>"; ?></td><td><?php echo "(".$counted.")"; ?><a href="inbox.php">Messages</a></td><td><?php echo "(".$buddyRequestNum.")"; ?><a href='notification.php'>Notifications </a></td><a style="color:powderblue" href="login.php?logout=true">Logout</a> 
<td></tr>
</table>

<table align="left" style="background-color:silver;width:100%;/*position:relative;*/font-style:Arial;">
<tr><td><a href="home.php" id="lhome" style="width:150px;height:30px;">Home </a></td>
<td><a href="games.php" id="lgame" style="width:150px;height:30px">Games </a></td>
<td><a href="leaderb.php" id="lleader" style="width:150px;height:30px">Leaderboard </a></td>
<td><a href="about.php" id="lleader" style="width:150px;height:30px">About </a></td>
<td><input type="text" onfocus="this.value='';" onblur="this.value='Search'"  style="width:150px;height:30px;/*position:relative;*/float:right;color:navy" name="search" value="Search"  /></td>
</tr></table>







