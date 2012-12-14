<html><head><title>Edit Words </title>

<script type="text/javascript" src="scripts/editwords.js"> </script>
<script type="text/javascript" src="scripts/jquery-1.8.0.min.js"> </script>
<script type="text/javascript">
$(document).ready(function(){$("#edit").click(function(){$("#edit").hide("fast");});});

</script>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />

</head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<div id="p">
<?php
  session_start();
  include("BL/wordBL.php");
  wordEditInit();
//	session_destroy();	
 
//session_unset();

?>
</div>
</div>
</body>
</html>
