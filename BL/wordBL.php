<?php
include("DA/wordDA.php");

function wordEditInit()
   {
	if(!isset($_SESSION['nRows']))
        $_SESSION['nRows'] = 3;
        
        if(!isset($_SESSION['row1Index']))
             {
				$_SESSION['row1Index'] = 1;
				$_SESSION['row2Index'] = 2;
				$_SESSION['row3Index'] = 3;
			}
		  $row1Index =  $_SESSION['row1Index'];
          $row2Index =  $_SESSION['row2Index'];
          $row3Index =  $_SESSION['row3Index'];
            



     $nRows = $_SESSION['nRows'];
  
	
	
	
	
 	 
 	 	
	
	@$submit = $_POST['submit'];
	@$next = $_POST['next'];
	@$previous = $_POST['pre'];
	if(!isset($submit))
	     {
	     connect(); 
	     editWords($nRows);
	     $nRows+=3;
	     $_SESSION['nRows'] = $nRows;
	     closeDB();
	     
	     }
	    if(isset($submit))
	        {
				
			@$row1 = $_POST['02'];	
			@$row2 = $_POST['12'];
			@$row3 = $_POST['22'];
			
			
			if(isset($row1))
			   	{
			   	 
				insertRow($row1Index,$_POST['02'],$_POST['03']);	
				connect();	
				editWords($nRows);
				closeDB();
				}
		   if(isset($row2))
		      	{
				
				insertRow($row2Index,$_POST['12'],$_POST['13']);
				connect();	
				editWords($nRows);
				closeDB();
				}
			if(isset($row3))
			    {
					
				insertRow($row3Index,$POST_['22'],$_POST['23']);
				connect();	
				editWords($nRows);
				closeDB();	
				}
				
				
				
			}
	    
	    
	    if(isset($previous))
	      {
	       
	       $nRows =   $_SESSION['nRows'];
	       echo "<script type='text/javascript'> alert('In prev $nRows'); </script>";
	       $row1Index-=3;
	       $row2Index-=3;
	       $row3Index-=3;
	       
	        $_SESSION['row1Index'] = $row1Index;
          	$_SESSION['row2Index']= $row2Index;
            $_SESSION['row3Index'] = $row3Index;
			
		 connect(); 
		 $nRows-=3;
	     
	     
	     $_SESSION['nRows'] = $nRows;
	     editWords($nRows);
	     closeDB();
	     
			
		}
	    
	    else if(isset($next))
	      {
	        echo "<script type='text/javascript'> alert('In next $nRows'); </script>";
	       
	       $row1Index+=3;
	       $row2Index+=3;
	       $row3Index+=3;
	       
	        $_SESSION['row1Index'] = $row1Index ;
          	$_SESSION['row2Index']= $row2Index  ;
            $_SESSION['row3Index'] = $row3Index;
			
		 connect(); 
		 
	     
	     $nRows+=3;
	     $_SESSION['nRows'] = $nRows;
	     editWords($nRows);
	     closeDB();
	     
			
		}
	
		
	
	
	
	
}

function validateComb($word,$latin)
		{
	 global $validComb;
	 
	 $word = trim($word);
	 $latin = trim($latin);
	 
	 $word = str_split($word);
	 $latin = str_split($latin);
	 
	 for($i=0; $i<strlen(latin);$i++)
	       {
			
		if($i==0&&$word[$i]==$latin[$i])
		   		{
			$validComb = false;
			return $validComb;
			
				}
				else if($i>0&&$i<strlen($latin)-4)
				     {
						
					if($word[$i]==$latin[$i])
					      $validComb = true;
						  
						  else
						    {
								$validComb = false;
								return $validComb; 
								
							}	
						
						
					}
					
					
					if($i>=strlen($latin)-4&&$i<strlen($latin))
					    {
							
							
							
						}	
			
			
		}
	 return $validComb;
	}


 function editWords($n)
      {
		global $con;
		echo "<script type='text/javascript'>document.getElementById('p').innerHTML = '';</script>";
		
		if($_SESSION['nRows']!=3)
		   $query = "SELECT * FROM Words WHERE rowIndex <= $n AND rowIndex >$n-3";
		
		 else
		    $query = "SELECT * FROM Words WHERE rowIndex <= $n";
		
		$result = mysql_query($query,$con);
		echo "<h3>Word Editor </h3>";
		echo "<form action='' method='POST'>";
		echo "<table>";
		echo "<tr><td>  Row  \t</td><td> Word\t </td><td> Latin\t </td></tr>";
		$rowN = 1;
	
		$col1="";
		$col2="";
		$col3="";
		for($i=0;$i<$n;$i++)
		     {
		if($row = mysql_fetch_array($result))
		    {
				$col1 = $i."1";
				$col2 = $i."2";
				$col3 = $i."3";
				 
				echo "<tr><td><span id='$col1'>$row[0]</span></td><td><span id='$col2'>$row[1]</span></td><td><span id='$col3'>$row[2]</span></td><td><a href='#' id='edit' onclick='editRow($i)'>Edit</a> </td></tr>";
				
				
				
			}
			else
			{
			 
			
			break;	
				
			}
			   
			   
			   
			   }
			
			echo "</table>";
			echo "<input type='submit' name='submit' value='Save' disabled/> \t";
			if($_SESSION['nRows']!=3) 
						echo "<input type='submit' name='pre' value='Prev' />";
			echo "<input type='submit' name='next' value='Next ' />";
			echo "</form>";
			include("menus/menu.php"); 
		   
		
		
		
	}
	
function addComb($word,$latin)
	{
	global $con;
	$addComb = true;
	
   $word =	trim($word);
	$latin = trim($latin);
	
	$result = getWordsAndLatin();
	     
	     
	     while($row = mysql_fetch_array($result))
	           {
				
			if($row[0]==$word||$row[1]==$latin)
			    {
			     echo "Combination already exists <br />";
				 $addComb = false;	
				 break;
				}
				
				}
	
		if($addComb)
		   {
		    
		    if(setWordsAndLatin($word,$latin))
		          	echo "combination added <br />";	
					
				
			else
				echo "Could not add combination.<br />";
				
			
			  
		    
	 
		
		   }
		
	}
	


?>