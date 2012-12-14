<?php

include_once("DA/messageDA.php");
include_once("menus/topmenu.php");



echo "<h3>Message Reader</h3>";

@$username = $_SESSION['username'];
@$message = $_GET['message'];
@$fromInbox = $_GET['from'];
@$message_id = $_GET['id'];
   connect();
  markRead($message_id);
           
           closeDB();
echo "Message from <strong>$fromInbox</strong> <br /><br />";
echo $message;
echo "<br /><br />";
echo "<a href='messageReader.php?delete=1&message_id=$message_id'>Delete</a>";

if(isset($_GET['delete']))
    {
		connect();
		deleteMessage($_GET['message_id']);
		closeDB();
		
		
	}


 if(isset($_POST['to'],$_POST['from'],$_POST['message']))
        {
			$to = $_POST['to'];
			$from = $_POST['from'];
			$message = $_POST['message'];
			
			// validate all this...
			
			
			connect();
			sendTextMessage($to,$from,$message,0);  
			closeDB();
		}


	echo "<p>Reply: </p>
<form action='' method='POST'>
<input type='hidden' name='to' value='$fromInbox' />
<input type='hidden' name='from' value='$username' />
<textarea name='message' value=''></textarea>
<input type='submit' name='submit' value='Send' />
</from>";

include("menus/menu.php");

?>