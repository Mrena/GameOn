<html><head><title>Instructions </title>
<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
<style type="text/css">
p {color:gray;font-style:em;font-size:20px}
</style>
</head>
<body>
<div id="page">
<?php
include("menus/topmenu.php");

?>
<h3> Instructions </h3>

<?php 

$filename = "bin/instruct.txt";
$file = fopen($filename,'r');
$string = fread($file,filesize($filename));

echo $string; 


include("menus/menu.php"); ?>
</div>
</body>
</html>