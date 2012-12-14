<!DOCTYPE html> 
<html><head><title>Menu </title>
<script type="text/javascript" src="scripts/jquery-1.8.0.min.js"> </script>
<script type="text/javascript" src="rotateImages.js"> </script>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
<style type="text/css">
td.intro {width:100%;height:25px;color:gray;font-style:em;font-size:20px}
</style>
<script type="text/javascript">

</script>
</head>
<body>
<div id="page">


<?php
include_once("menus/topmenu.php");
include_once("BL/messageBL.php");

?>

<br />
<table class="text" align="left" border="0">
<tr><td class="intro"  rowspan="5" colspan="3">
<!--
<tr><td style="height:150px;width:150px;position:absolute;">
<img src="images/MountSnowdon.jpg" id="image" alt="buckoff" style="height:150px;width:150px;padding:2px;/*margin-right:.lem;*/float:left;" />
</td>
</tr>-->


<?php
		connect();
		$result = getAllUnreadMessages("homeIntro");
		closeDB();
		
		if($intro = mysql_fetch_array($result))
		       {
				$introM = $intro[2];
				echo $introM;
				
				
			}
?>

</td> <!--</tr>
<tr><td  style="height:150px;width:150px;" rowspan="2" colspan="5"> </td><td style="height:150px;width:150px;position:absolute;" rowspan="4" colspan="5"> </td> </tr>-->
</table>
<?php
connect();
playersOn();
closeDB();

?>
<table align="left">
<tr><td><a href="forum.php">Forum </a> | </td><td><a href="about.php">About | </a> </td><td><?php if($username=="Mrena") echo "<a class='nav' href='admin.php'>Admin | </a> "; ?>
 </td><td><a  href="developerdashboard.php">Developer Zone | </a> </td><td><a  href="contactus.php">Contact Us </a> </td></tr>
 </table>
</div>
</body>
</html>