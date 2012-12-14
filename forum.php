<html>
<head><title>Forum </title>
<?php
include_once("BL/messageBL.php");

if(isset($_POST['submit'],$_POST['topic'],$_POST['message']))
     {
	$to = "forum";
	$from = $_SESSION['username'];
	$subject = $_POST['topic'];
	$message = $subject;
	$message .= "<br />";
	$message .= $_POST['message'];
	$message =  addTime($message);
	$isRead = 0;	
		
	connect();
	sendTextMessage($to,$from,$message,$isRead);
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
<h3>Forum </h3>
<p class="text">You can write about any topic you fancy, so as long as it is not offensive to others.  </p>
<p><strong>New Post</strong></p>
<table>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<tr><td>Topic: </td><td><input type="text" name="topic" /> </td></tr>
<tr><td>Message:</td><td><textarea name="message"> </textarea> </td></tr>
<tr><<td><input type="submit" name="submit" value="Send" /> </td></tr>
</form>
</table>
<?php

    connect();
	$result =  getAllUnreadMessages("forum");
	closeDB();
	
	while($post=mysql_fetch_array($result))
	      {
	       $from = $post[1];
	       $message = $post[2];
	       $messageId = $post[5];
	       
		echo "<div class='text'>";	
		echo "<a href='profileviewer.php/?profile=$from'>$from</a>";
		echo "<br />";
		echo $message;
		echo "<br />";
		echo "<a href='commenter.php?messageId=$messageId'>Comment<a/>";
		echo "<br /><br />";	
		echo "</div>";	

       

  	
			
		}
include("menus/menu.php");

?>
</div>
</body>
</html>
