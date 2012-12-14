function onEdit(n)
    {
    
		
	switch(n)
	   {
		case 1: var name = document.getElementById("name").innerHTML;
				document.getElementById("name").innerHTML = "<input type='text' name='name' value='"+name+"' />";
				document.getElementById("submit").disabled = false;	
				$("#1").click(function() { $("#1").hide("slow");});			 		   	
			break;
		case 2: var surname = document.getElementById("surname").innerHTML;
				document.getElementById("surname").innerHTML = "<input type='text' name='surname' value='"+surname+"' />";
		    	document.getElementById("submit").disabled = false;
		    	$("#2").click(function() { $("#2").hide("slow");});
			break;
			 
		case 3: var about = document.getElementById("about").innerHTML;
				document.getElementById("about").innerHTML = "<input type='text' name='about' value='"+about+"' />";
				document.getElementById("submit").disabled = false;
				$("#3").click(function() { $("#3").hide("slow");});
			break;
				    
		
		
		}
		
		
		
		
	}