<?php
include_once("BL/messageBL.php");

?>
<html>
<head>
<title> </title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
</head>
<body>
<div id="page">
<?php
	include_once("menus/topmenu.php");
    echo "<h3>Forum </h3>";
	
    
    if(isset($_POST['submit']))
        {
		
		
		$postId = $_POST['postId'];
		$reply = $_POST['reply'];
		$from = $_SESSION['username'];
	   
	   
	   writeComment($postId,$from,$reply);
    
			
		}


     if(isset($_GET['messageId']))
               {
                
           $postId = $_GET['messageId'];
           displayComments($postId);
           
                }



?>

</div>
</body>
</html>