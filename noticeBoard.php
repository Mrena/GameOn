<?php
 include("DA/messageDA.php");

  echo "<h3>Notice Board</h3>"; 

   $notice = "noticeBoard";
   
   connect();
   $result = getAllMessages($notice);
    closeDB();
   echo "<table>";
   
   while($row = mysql_fetch_array($result))
        {
			
		echo "<tr><td> </td></tr>";	
		echo "<tr><td> </td></tr>";	
		echo "<tr><td>$row[2]</td></tr>";	
			
		}
   
   echo "</table>";
   
   include("menus/menu.php");
  


?>