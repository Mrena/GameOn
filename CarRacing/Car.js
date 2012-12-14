var minRoad;
var maxRoad;
var index;
var startRoad = new Array("10","20","30");
var flag = 1;
var carMoved = 0;
var generateCarNum = 1;



function generateCar()
{


	// TO DO: Randomly generate a number from zero to two and map it to startRoad array
	// then save the result to index.
	if( generateCarNum !=1 && carAhead())
		flag++;
	
	if(flag==1)
	{	
	index = "10";
	flag = 2;
	}
         
	else if(flag==2)
	{
	index = "20";
	flag = 3;
	}
	else
	{	
	index = "30";
	flag = 1;

	}		


	initCar(index);



}

		function carAhead()
				{
					var isAhead = false;
					var indx = parseInt(index)-1;
				
					
						for(var i=0;i<=3;i++)
						{
						 	indx++;
						 		alert(indx);
					       if(document.getElementById(indx).value=="1")
					       			isAhead = true;
							}			   			 
					
				return isAhead;	
				}

function initCar(index)
{
    
 	 document.getElementById(index).innerHTML = 1;
	

}



function moveCarForward()
{
	
	
	document.getElementById(index).innerHTML = 0;
	if(index.charAt(1) !='3')
		{
	
		index = parseInt(index);
		index++;
		
		 if(checkColl())
			endGame();
			

		
		document.getElementById(index.toString()).innerHTML = 1;
		
			index = index.toString();
						
		}
			else {				
				generateCar(); }
				
	


}


function Car(min,max)
{


	minRoad = min;
	maxRoad = max;
	generateCar();

}
