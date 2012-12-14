
var flag = 1;

   function rotateImagesFunc()
         {
			
		
		
		if(flag==1)
		      {
		      $("#image").slideUp("slow"); 
		      document.getElementById("image").src = "images/MountSnowdon.jpg";
		      document.getElementById("image").alt="buckoff";
		      $("#image").show("slow");
			  flag++;
			   }
			else if(flag==2)
			    {
			     
				 $("#image").slideUp("slow");
				 document.getElementById("image").src = "images/DybblsbroStation.jpg";
				 document.getElementById("image").alt="DybblsbroStation";
				 $("#image").show("slow");
			     flag++;	
					
				} 
			else if(flag==3)
			    {
				 $("#image").slideUp("slow");
				 document.getElementById("image").src = "images/PowerOfWords.jpg";
				 document.getElementById("image").alt="PowerOfWords";
				 $("#image").show("slow");
			     flag++;	
					
				}
				else if(flag==4)
				   {
					
				 $("#image").slideUp("slow");
				 document.getElementById("image").src = "images/MountSnowdon.jpg";
				 document.getElementById("image").alt="MountSnowdon";
				 $("#image").show("slow");
			     flag++;	
					
				}
				else if(flag==5)
				   {
					
				 $("#image").slideUp("slow");	
				 document.getElementById("image").src = "images/LangelinieAlle.jpg";
				 document.getElementById("image").alt="LangelinieAlle";
				 $("#image").show("slow");
			     flag++;	
					
				}
				else if(flag==6)
				   {
				 $("#image").slideUp("slow");
				 document.getElementById("image").src = "images/DarkeningClockwork.jpg";
				 document.getElementById("image").alt="DarkeningClockwork";
				 $("#image").show("slow");
			     flag++;	
					
				   } 
				else if(flag==7)
				   {
				
				 $("#image").slideUp("slow");	
				 document.getElementById("image").src = "images/FedericaMiglio.jpg";
				 document.getElementById("image").alt="FedericaMiglio";
				 $("#image").show("slow");
			     flag++;	
					
				   } 
			else if(flag==8)
				 {
					
				  $("#image").slideUp("slow");
				  document.getElementById("image").src = "images/MomijiDream.jpg";
				  document.getElementById("image").alt="MomijiDream";
				  $("#image").show("slow");
			      flag++;	
					
				  } 	
				else
				   {
					 $("#image").slideUp("slow");
					 document.getElementById("image").src = "images/JardinPolar.jpg";
					 document.getElementById("image").alt="JardinPolar";
					 $("#image").show("slow");
			         flag=1;	
					
				   }			 		 		
			
			
		}