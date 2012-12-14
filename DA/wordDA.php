<?php
include_once("connector.php");


 
  //$word;
  //$latin;
  
  $validComb;
  
	
	
	

	 function getCombination($rowIndex)
	{
	 global $con; 
	 $row = array(); 
		
	$query = "SELECT word, latin FROM Words WHERE rowIndex=$rowIndex LIMIT 1";
		
		$result = mysql_query($query,$con);
		$row = mysql_fetch_array($result);
			
		return $row;
		
	}

  function getWordsAndLatin()
        {
			
		$query = "SELECT word,latin FROM Words";
	     $result =  mysql_query($query,$con);	
			
			
			return $result;
		}
		
		function setWordsAndLatin($word,$latin)
		      {
				$isAdded = false;
				
				$query = "INSERT INTO Words (word,latin) VALUES('$word','$latin')";
		        if(mysql_query($query,$con))
				         $isAdded = true;
						 
						 else 
						    $isAdded = false;
								
				return $isAdded;
				
			}



	
		
	 
	 function getWordsNum()
	{
	 global $con;
		
		$query = "SELECT * FROM Words";
		$result = mysql_query($query,$con);
		$rowNum = mysql_num_rows($result);
		
		return $rowNum;
		
	}
	
	
	
	function insertRow($rowIndex,$word,$latin)
	    {
		global $con;	
		
		connect();
		$query = "UPDATE Words SET word='$word',latin='$latin' WHERE rowIndex = $rowIndex";
		if(!mysql_query($query,$con))
		    echo "err querying the DB".mysql_error($con);
		closeDB();	
			
			
			
		}

	
	
	


?>