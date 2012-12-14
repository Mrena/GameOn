function editRow(n)
    {
	
  
	var word = document.getElementById(n+"2").innerHTML;
	var latin = document.getElementById(n+"3").innerHTML;
				
	
	document.getElementById(n+"2").innerHTML = "<input type='text' name='"+n+"2' value='"+word+"' />";
	document.getElementById(n+"3").innerHTML = "<input type='text' name='"+n+"3' value='"+latin+"' />";
	document.getElementById("submit").disabled = false;
		  
		
		
		
		
		
		
		
		
	}