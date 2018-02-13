<head>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</head>

<script>
   $(document).ready(function(){
    $("#getNumber").click(function(){
        
		
		var number1= Math.floor(Math.random() * 174) + 4;
		var number2= Math.floor(Math.random() * 193) + 7;
		
		var fewsion = number1 + number2;
		
		document.getElementById("result1").innerHTML = number1;
		document.getElementById("p").innerHTML = "+";
		document.getElementById("result2").innerHTML = number2;
		document.getElementById("show").value = fewsion;
		
		
		
    });
});

	$(document).ready(function(){
    $("#Sendans").click(function(){
        var ran = document.getElementById("show").value;
		var numran = document.getElementById("ans").value;
		
		if(numran == ran) {
		  document.getElementById("Result").innerHTML = "Correct";
		}else {
			document.getElementById("Result").innerHTML = "Incorrect";
		}
    });
});




	
  </script>
<body>
<center>
	<button id="getNumber">Random</button>
	
		<p id="result1">0</p> 
		<p id="p"> +</p> 
		<p id="result2">0</p>
		<p id="show"></p>
	
	
	<div>
		<input type="text" id="ans"> 
		<button id="Sendans">Send Answer</button>
	</div>

	<div>
		Result : <div id="Result"></div>
	</div>
</center>

 
</body>