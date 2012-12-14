var car2 = false;
var moments = 0;
var sec = 0;
var min = 0;
var timer;
var cars;



	function constructRoad()
		{

	
	
	var road;
	var ind; 
	for(var i=1;i<=3;i++)
   		{
	for(var x=0;x<=3;x++)
              		{
		
	      	i =i.toString();
		x = x.toString();
		ind = i+x;
		
		road = document.getElementById(ind);
		road.innerHTML= "0";

		i = parseInt(i);
		x = parseInt(x);
			

				}
	
			}
         
	Car(0,2);
		}

	function disableControl(n)
	{
	
	
	for(var i=2;i<=8;i+=2)
		document.getElementById(i).disabled = n;
		
	
	}


		
	function checkColl()
	{
	var flag = false;
	if(index==parseInt(carIndex))
		{
			alert("A collusion occured!\nTry again.");
		
			disableControl(true);
			flag = true;
		}
	
	


	return flag;
	}



	

	function endGame()
		{

		clearInterval(move);
		clearInterval(timer);
		clearInterval(cars)	
		disableControl(true);

		document.getElementById("btnSp").disabled=true;
		document.getElementById("btnSpause").disabled = true;
		window.location = "\cars.php";

		}


	function pauseGame()
		{
		clearInterval(move);
		clearInterval(timer);
		clearInterval(cars);	
		disableControl(true);	
		document.getElementById("btnSpause").disabled = true;
		document.getElementById("btnSp").disabled = false;
		document.getElementById("btnSp").value = "Resume";

		}

	function startGame()
		{
		move = setInterval('moveCarForward()',frequency);
		cars = setInterval("generateCar()",frequency*5);
		if(!car2)
			{
		initCar2();
		 car2=true;
			}
		document.getElementById('btnSpause').disabled=false;
		document.getElementById("btnSp").disabled = true;
		disableControl(false);	
		
		timer = setInterval("count()",100);

		}

		function setFrequency()
		{

         	var level = document.getElementById("level");
		if(level.options.selectedIndex!=0)
			{
         	var i = level.options.selectedIndex;
		
		frequency = level.options[i].value;
		document.getElementById("btnSp").disabled=false;
		level.enabled = false;
			}
		


		}	



		function count()
		{
		

		displayTime();
		moments++;
		if(moments==60)
		{
		moments = 0;
		sec++;
 		if(sec==60)
     		 {
		sec =0;
         	min++;
		
			}

		}
	
		}


	

	function displayTime()
	{
	if(min<10)
	{
  	 min = "0"+min.toString();
	}
    	if(sec<10)
		{

        sec = "0"+sec.toString();
		}
            if(moments<10)
			{
                moments = "0"+moments.toString();
			}

	document.getElementById("timer").innerHTML= min +":"+sec+":"+moments;
	if(min<10)
	min = parseInt(min.charAt(1));
	if(sec<10)
	sec = parseInt(sec.charAt(1));
	if(moments<10)
	moments = parseInt(moments.charAt(1));


	}
	