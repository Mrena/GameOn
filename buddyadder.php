<?php
include("BL/buddyBL.php");
$requester = $_GET['requester'];
$buddy = $_GET['buddy'];

   connect();
   if(addBuddyRequest($requester,$buddy))
          echo "Your buddy request has been sent.<br /><br />";
   closeDB();
  

include("menus/menu.php");
?>