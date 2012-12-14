var buttonIndex;
var carIndex;

	function chooseMovement(buttonIndex)
	{
		
	if(buttonIndex==2)
		moveForward();
	
	if(buttonIndex==6)
		moveRight();
	if(buttonIndex==4)
		moveLeft();

	else
		moveBackward();


	}


	function moveLeft()
	{

	
	if(carIndex.charAt(0)!='1')
			{
		var index;
		document.getElementById(carIndex).innerHTML = 0;
		index = parseInt(carIndex);
		index-=10;
		
		carIndex = index.toString();
		document.getElementById(index).innerHTML=2;
		
			}

	

	}

	function moveRight()
	{

	
	if(carIndex.charAt(0)!='3')
			{
		var index;
		document.getElementById(carIndex).innerHTML = 0;
		index = parseInt(carIndex);
		index+=10;
		
		carIndex = index.toString();
		document.getElementById(index).innerHTML=2;
		
		 
			}


	}

	function moveForward()
	{

	if(carIndex.charAt(1)!='0')
			{
		var index;
		document.getElementById(carIndex).innerHTML = 0;
		index = parseInt(carIndex);
		index--;
		carIndex = index.toString();
		
		document.getElementById(carIndex).innerHTML=2;

			}

	}

	function moveBackward()
	{
		if(carIndex.charAt(1)!='3')
			{
		var index;
		document.getElementById(carIndex).innerHTML = 0;
		index = parseInt(carIndex);
		index++;
		
		carIndex = index.toString();
		document.getElementById(carIndex).innerHTML=2;

			}


	} 

	function initCar2()
	{

	document.getElementById("23").innerHTML=2;
	carIndex = "23";

	}