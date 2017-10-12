<!DOCTYPE html>
<html lang="en">
<head>
  <title>INFINITO'17</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  
	<!-- Import Roboto Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<script src='http://use.edgefonts.net/creepster.js'></script>
	<!-- eater font  -->
	<script src='http://use.edgefonts.net/eater.js'></script>
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div id="home">
	<div class="contain">
		<!-- Navbar -->
		<nav>
		  <div class="nav-wrapper">
		    <a href="index.php" style="font-family: eater; font-size: 3em;">INFINITO'17</a>
		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		    <ul class="right hide-on-med-and-down">
		    	<li><a href="#home">Home</a></li>
		    	<li><a href="#about">About Us</a></li>
		    	<li><a href="#gallery">Gallery</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="rules.html">Rules</a></li>
		    	<li><a href="contact.html">Contact</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="reg2.html">Register</a></li>
		    </ul>
		    <ul class="side-nav" id="mobile-demo">
		    	<li><a href="#home">Home</a></li>
		    	<li><a href="#about">About Us</a></li>
		    	<li><a href="#gallery">Gallery</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="rules.html">Rules</a></li>
		    	<li><a href="contact.html">Contact</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="reg2.html">Register</a></li>
				</ul>
		  </div>
		</nav>
	</div>
</div>

<div id="webbg">
	
	<div id="visitor">
		<SCRIPT>
			expireDate = new Date
			expireDate.setMonth(expireDate.getMonth()+6)
			jcount = eval(cookieVal("jaafarCounter"))
			jcount++
			document.cookie = "jaafarCounter="+jcount+";expires=" + expireDate.toGMTString()

			function cookieVal(cookieName) {
			thisCookie = document.cookie.split("; ")
			for (i=0; i<thisCookie.length; i++){
			if (cookieName == thisCookie[i].split("=")[0]){
			return thisCookie[i].split("=")[1]
			}
			}
			return 0
			}

			function page_counter(){
			for (i=0;i<(5-jcount.toString().length);i++)
			document.write('<span class="counter">0 &nbsp;</span>')
			for (y=0;y<(jcount.toString().length);y++)
			document.write('<span class="counter">'+' '+jcount.toString().charAt(y)+'</span>')
			}
		</SCRIPT>

		<SCRIPT>
			page_counter(jcount);
		</SCRIPT>

	</div>
	
	<div id="demo"></div>
	
</div>



<div id="mobilebg">
	<img src="images/mobilebg.jpg" class="img-responsive">
</div>

</div>



<section id="about">

	<div class="row">		
		<div id="aboutus1"></div>
	</div>

</section>

<section id="gallery">

<div id="galleryimage"></div>	
	

</section>

<footer class="page-footer footer">
		    <div class="footer-copyright">
		      <div class="container">
		      <div class="row flow-text">
		      	<div class="left-align" style="display: inline-block; font-size:14px;">Like us on
				<a href="https://facebook.com/kecinfinito" target="_blank">Facebook @kecinfinito</a>
				</div>
				<div class="center" style="display: inline-block; font-size:14px;">&nbsp 2017
				<a href="https://facebook.com/krishnacollege" target="_blank">Krishna Engineering College</a>
				</div>
		      	
		      	 <div style="display: inline-block; float: right; font-size:16px;">
				Developed By:<a href="https://facebook.com/KECREGAL" target="_blank"> REGAL Society</a>
		      	 </div>
		      	</div>
		      </div>
		    </div>
		  </footer>



<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 27, 2017 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "&nbsp;" + hours + " &nbsp;"
    + minutes + "&nbsp;" + seconds + " ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>


</body>
</html>
