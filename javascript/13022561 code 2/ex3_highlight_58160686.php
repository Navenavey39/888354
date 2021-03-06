<html>



<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.js"> </script>
<script>



$(document).ready(function(){

  $("#ans").click(function(){
	var number1 = 1;
	var result =0;
    var keyword = $("input").val();
    $(".context").unmark().mark(keyword, {
	
      acrossElements: false,
      accuracy: 'partially',
      caseSensitive: false,
      className: '',
      diacritics: true,
      element: 'mark',
      exclude: [],
      iframes: false,
      iframesTimeout: 5000,
      ignoreJoiners: false,
      ignoreGroups: 0, // markRegExp only
      ignorePunctuation: [], // 
      wildcards: "diabled",
      separateWordSearch: true,
      synonyms: {},
      // callback functions
      done: function(totalMatches) {
      
      },
      each: function(element) {},
      filter: function(node, term, counter, totalCounter) {
		result = number1++;
		
        return true;
      },
	  
      noMatch: function(keyword) {},
      // troubleshooting
      debug: false,
	  
      log: window.console
	  
    });
	 document.getElementById("demo").innerHTML = "result have number : "+result;
  });
	
});





</script>



</head>

<body>
	<span>Type in a keyword:</span>
	<input type="text" >

	<button id="ans"> Search </button>
	
	<div>
		<p id="demo"> </p>
	</div>
	
	<div class="context">
		<p>
  
			The Article : Continuous Digital Health

		The way we deal with our health is undergoing a major transformation, 
		not only because mobile Internet technology has made it possible to 
		have continuous access to personal health information, but also because 
		breaking the trend of ever-growing healthcare costs is increasingly necessary. 
		Estimates indicate that more than 70 percent of the world population 
		will have a smartphone by 2017. Connectivity, interoperability, sensing, 
		and instant feedback through smartphones all provide new opportunities for gaining 
		insights into our health behavior. Such insights are improving, and understanding 
		what motivates people to make healthy changes throughout their lifetimes is becoming 
		more important. Internet technology not only lets us continuously monitor an 
		individual's physiological and psychological state, but also allows for building 
		up a lifelong record of physical, mental, and social health.
		</p>
	</div>

</body>



</html>