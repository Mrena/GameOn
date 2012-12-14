<?php

include("DA/messageDA.php");

if(isset($_POST['text']))
   {
    $to = "noticeBoard";
    $from = $_SESSION['username'];
    $message = $_POST['text'];
    $message .= "<br />";
    $date = date('r');
    $date = substr($date,0,strlen($date)-5);;
    $message .= "$date";
    $isRead = 0;
    
connect();
sendTextMessage($to,$from,$message,$isRead);
closeDB();
   }


?>
<html>
<head><title> </title></head>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<h3> Notice Board Updator</h3>
<?php

     $date = date('r');
     $date = substr($date,0,strlen($date)-5);
     echo $date;
?>
<p> Message: </p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
<tr><td><textarea name="text" colspan="25" rowspan="50" > </textarea> </td></tr>
<tr><td><input type="submit" name="submit" value="Send" /> </td></tr>
</table>
</form>
<?php
include("menus/menu.php");
?>
</div>
</body>
</html>