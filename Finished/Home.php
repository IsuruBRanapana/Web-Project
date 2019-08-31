<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
	<link href="Style.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.front1{display:none;}
	</style>
</head>

<body>
	<div class="body">
				<div class="nav">
			<ul>
				<li><b><a href="Home.php">Home</a></b></li>
				<li><b><a href="Events.php">Events</a></b></li>
				<li><b><a href="Pictures.php">Portfolio</a><b></li>
				<li><b><a href="Booking.php">Booking</a><b></li>
				<li><b><a href="About Me.php">About Us</a><b></li>
			</ul>
		</div>
		<div class="front" style="vertical-align: center;">
			<center><img src="Images/home.jpg" class="front1" style="vertical-align: center;"></center>
			<center><img src="Images/home1.jpg" class="front1" style="vertical-align: center;" ></center>
			<center><img src="Images/home3.jpg" class="front1" style="vertical-align: center;"></center>
			    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("front1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


		</div>
		<div id="intro">
			<h2 align="centre">Introduction</h2>
			<p>
				<img class="introim" src="Images/Location.jpg">
				The R&C Hotel is a modern, elegant 4-star hotel overlooking the sea, perfect for a romantic, charming vacation, in the enchanting setting of Indian Ocean and the Sri Lankan Sea.
				<span><a href="About Me.php">Read More...</span></a>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</p>
		</div>
		<div id="intro">
			<h2>Facilities</h2>
			<p>
				<img src="Images/Facilities.jpg" class="introim">
				The rooms at the R&C Hotel are new, well-lit and inviting. Our reception staff will be happy to help you during your stay Sri Lanka, suggesting itineraries, guided visits and some good restaurants in the historic centre.
				<span><a href="About Me.php">Read More...</span></a>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</p>
		</div>
		<div id="intro">
			<h2>Activities</h2>
			<p>
				<img src="Images/Rooftop3.png" class="introim">
				While you enjoy a cocktail by the swimming pool on the rooftop terrace, you will be stunned by the breathtaking view of the bay of Sri Lankan Sea. Here, during your summer stays, our bar serves traditional Sicilian dishes, snacks and salads.
				<span><a href="About Me.php">Read More...</span></a>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</p>
		</div>
		<div id="intro">
			<h2>Services and Foods</h2>
			<p>
				<img src="Images/Breakfast.jpg" class="introim">
				Available services include Voip telephone – ideal for low-cost international calls – Wi-Fi internet connection, breakfast and 24-hour reception.
				<span><a href="About Me.php">Read More...</span></a>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</p>
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<div>
			<marquee id="marqueetool">Lemonardo Resort</marquee>
		</div>
		<div id="like">
			<p>Like Me...</p>
		</div>
		<div id="mar">
			<ul>
				<li><img src="Images/facebook1.png" id="marqueeim"></li>
				<li><img src="Images/blogger.png" id="marqueeim"></li>
				<li><img src="Images/twitter.png" id="marqueeim"></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
	</div>

</body>
</html>
