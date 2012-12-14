
<html>
<head>
<script type="text/javascript" src="scripts/jquery-1.8.0.min.js"> </script>


<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
 </head>
<body>
<div id="page">


<?php
include("menus/topmenu.php");

?>
<script type="text/javascript">
$(document).ready(function(){$("#edit").click(function(){$("#edit").hide("slow");});});

</script>
<?php

include("BL/instructeditorBL.php");


?>
<div name="empty">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> 

<input type="submit" name="edit" id="edit" value="Edit" />
</form>
</div>
<?php include("menus/menu.php"); ?>
</div>
</body>
</html>