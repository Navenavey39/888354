<<<<<<< HEAD
<html>

<head>
<script>

 function search() {
	document.getElementById("demo").innerHTML= "";
	document.getElementById("demo2").innerHTML= "";
  var msn = document.getElementById("MSN").value; 
  var search = document.getElementById("search").value; 
  var sensitive = document.getElementsByName("Care"); 
  
  for (var i = 0; i < sensitive.length; i++) {
    if (sensitive[i].type === 'radio' && sensitive[i].checked) {
        value = sensitive[i].value;     
    } 
  }
  

  
	if(msn != "" && search !="" && value !="9"){ 
		console.log(value);
		
		
		 if(value=="N") { 
			
				var count = new RegExp(search, "gi");
				var test = msn.match(count);
				
				
				if(test == null) {
				document.getElementById("demo").innerHTML= "0";
				}else{
				var number = test.length;
				
				document.getElementById("demo").innerHTML= number;
				}
			
			
				
			
			
		}
		else if(value=="Y") { 
			
				var count = new RegExp(search, "g");
				
				var test =  msn.match(count);
				
				if(test == null) {
				document.getElementById("demo").innerHTML= "0";
				}else {
				var number = test.length;
				document.getElementById("demo").innerHTML= number;
				}
			
			
				
			
			
		}
		
		
	}else { 
		document.getElementById("demo2").innerHTML= "Please enter a value Complete";
	}
		
		
		
  
		
  
 

   
  
		

	
  
  
   



 
}

</script>

<head>


<body>
<center>
	<div>
		Text Input 
		<textarea id="MSN"></textarea> 
	</div>
	<br>
	
	<div>
         Sensitive Case
		 <input type="radio" id="Y" name="Care" value="Y"> YES <input type="radio" id="N" name="Care" value="N"> NO
	</div>
	<br>
	<div>
		Search <input type="text" name="search" id="search"> 
	</div>
	<br>
	<div>
		<button name="submit" id="submit" onclick="search()"> Search </button>
	</div>
	
	<div>
		<p id="demo"> </p>
		<p id="demo2"> </p>
	</div>
	
<center>

</body>




=======
<html>

<head>
<script>

 function search() {
	document.getElementById("demo").innerHTML= "";
	document.getElementById("demo2").innerHTML= "";
  var msn = document.getElementById("MSN").value; 
  var search = document.getElementById("search").value; 
  var sensitive = document.getElementsByName("Care"); 
  
  for (var i = 0; i < sensitive.length; i++) {
    if (sensitive[i].type === 'radio' && sensitive[i].checked) {
        value = sensitive[i].value;     
    } 
  }
  

  
	if(msn != "" && search !="" && value !="9"){ 
		console.log(value);
		
		
		 if(value=="N") { 
			
				var count = new RegExp(search, "gi");
				var test = msn.match(count);
				
				
				if(test == null) {
				document.getElementById("demo").innerHTML= "0";
				}else{
				var number = test.length;
				
				document.getElementById("demo").innerHTML= number;
				}
			
			
				
			
			
		}
		else if(value=="Y") { 
			
				var count = new RegExp(search, "g");
				
				var test =  msn.match(count);
				
				if(test == null) {
				document.getElementById("demo").innerHTML= "0";
				}else {
				var number = test.length;
				document.getElementById("demo").innerHTML= number;
				}
			
			
				
			
			
		}
		
		
	}else { 
		document.getElementById("demo2").innerHTML= "Please enter a value Complete";
	}
		
		
		
  
		
  
 

   
  
		

	
  
  
   



 
}

</script>

<head>


<body>
<center>
	<div>
		Text Input 
		<textarea id="MSN"></textarea> 
	</div>
	<br>
	
	<div>
         Sensitive Case
		 <input type="radio" id="Y" name="Care" value="Y"> YES <input type="radio" id="N" name="Care" value="N"> NO
	</div>
	<br>
	<div>
		Search <input type="text" name="search" id="search"> 
	</div>
	<br>
	<div>
		<button name="submit" id="submit" onclick="search()"> Search </button>
	</div>
	
	<div>
		<p id="demo"> </p>
		<p id="demo2"> </p>
	</div>
	
<center>

</body>




>>>>>>> 3a0286eae7a827fa1f9ba90b8c1e2483d31fdc8e
</html>