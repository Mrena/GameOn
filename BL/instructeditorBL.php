<?php
 $filename = 'bin/instruct.txt';
@$edit = $_POST['edit'];
if(isset($edit))
{  

 $file = fopen($filename, 'r');
 $string = fread( $file, filesize($filename) );
  
   echo "<span class='text'";
   echo "<h4>Current Instructions: </h4><br />";
   echo "<form action='' method='POST'>";
   echo "<textarea name='editor' value='$string' cols='50' rows='15'>$string</textarea> ";
   echo "<input type='submit' name='submit' value='Save' /> ";
   echo "</form>";
   echo "</span>";
   fclose($file);   
   }
 else
 {
  
    
    $file = fopen($filename, 'r');
    $string = fread($file, filesize($filename));
     echo "<span class='text'";
     echo "<h3>Instructions Editor</h3>";
     echo "<h4>Current Instructions: </h4><br />".$string;
     echo "</span>";
    fclose($file);
  }  
    
    @$submit = $_POST['submit'];
    @$editorContent = $_POST['editor'];
	 if(isset($submit))
	    {
			
		$file = fopen($filename,"w");
		fwrite($file,$editorContent);
		fclose($file);	
			
		echo"<script type'text/javascript'> window.location = 'instructeditor.php'; </script>";	
		} 

 



?>