<?php
include("player.php");
include_once("connector.php");
include("BL/wordBL.php");


	
	 $word;
	 $latin;
	 $answer;
	 $isCorrect;
	 $generated;
	 $con;
	 $row = array();
	 $genName;
	 
	 
	 
	
	

	 function shuffleGen()
	    {
		global $generated, $genName; 
		
		$randNum = mt_rand(1,2);
		$_SESSION['generated'] = $randNum;
		$generated=$randNum;
		if($randNum==1)
		{
		   $genName =  generateWord();
		 		    
		     
		}
		     else if($randNum==2)
		     {
		    $genName = generateLatin();
		      
		      
		      }
		return $genName;
			}

	 function generateWord()
			{
		global $row, $word, $latin;
			
				
		$row_num = getWordsNum();
		
		
		$randNum = mt_rand(1,$row_num);
		

	
		$row = getCombination($randNum);
		$_SESSION['word'] = $row[0];
		$_SESSION['latin'] = $row[1];
		
	return $_SESSION['word'];
		
		
			} 

	 function generateLatin()
			{
	 
	 global $row, $word, $latin;
		
		
		$row_num = getWordsNum();
		
		
		$randNum = mt_rand(1,$row_num);
	
		$row = getCombination($randNum);
		$_SESSION['word'] = $row[0];
		$_SESSION['latin'] = $row[1];
		
		return $_SESSION['latin'];
		
			}

	 function chooseCheck($answer)
			{
                $generated =  $_SESSION['generated'];
	 
	 
		if($_SESSION['generated']==1)
		      checkWord($answer);
		      
		      else if($_SESSION['generated']==2)
		       checkLatin($answer);
			}

	 function checkWord($answer)
			{

	 	
	
	
	if($answer==$_SESSION['word'])
	    $_SESSION['isCorrect'] = false;
		
		else if($answer==$_SESSION['latin'])
		        $_SESSION['isCorrect'] = true;
				
				else
				 $_SESSION['isCorrect'] = false; 
				 
				 if($_SESSION['isCorrect']==true)
						{
		
		
	    	echo "Correct answer ";
	    	$username = $_SESSION['username'];
			incrementScore($username); 	
			
			
						}	
			else if($_SESSION['isCorrect']==false)
			      {
			   echo "incorrect answer";
			   $username = $_SESSION['username'];
			   decrementScore($username);			
					}
		
				}

	 function checkLatin($answer)
			{
	 	
	 
	

	 
	 
		if($answer==$_SESSION['word'])
		{
	    $_SESSION['isCorrect'] = true;
		
		}
		else if($answer==$_SESSION['latin'])
		{
		        $_SESSION['isCorrect'] = false;
		       
				
		}		else
				 $_SESSION['isCorrect'] = false;
		
		if($_SESSION['isCorrect']==true)
		{
			
		
		
	
		echo "Correct answer!";
		$username = $_SESSION['username'];
		incrementScore($username); 	
			
			
		}
	else if($_SESSION['isCorrect']==false)
	{
	 
	    
	    echo "Incorrect answer!";
	    $username = $_SESSION['username'];
	    decrementScore($username);
		
	}	
				}
	
	
	
	
	




?>