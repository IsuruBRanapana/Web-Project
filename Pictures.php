<!DOCTYPE html>
<html>
<head>
	<title>Pictures</title>
	<link href="Style.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	.introim1{display:none;}
	.introim2{display: none;}
	.introim3{display: none;}
	.introim3{display: none;}

	</style>



</head>
<body>
	<div class="body">
		
		<div class="nav">
			<ul>
				<li><b><a href="Home.php">Home</a></b></li>
				<li><b><a href="Events.php">Events</a></b></li>
				<li><b><a href="Pictures.php">Portfolio</a></b></li>
				<li><b><a href="Booking.php">Booking</a></b></li>
				<li><b><a href="About Me.php">About Us</a><b></li>
			</ul>
		</div>
		<br>
		<br>s
		<div>
				<table class="slidetable">
					<tr>
						<td>

							<div class="slide-container">
								<div class="slides fade">
									<div class="number">1/4</div>
									<div><img src="images/A1.jpg" style="border-radius: 15px;"></div>
								</div>
								<div class="slides fade">
									<div class="number">2/4</div>
									<div><img src="images/A2.jpg"  style="border-radius: 15px;"></div>
								</div>
								<div class="slides fade">
									<div class="number">3/4</div>
									<div><img src="images/A3.jpg"  style="border-radius: 15px;"></div>
								</div>
								<div class="slides fade">
									<div class="number">4/4</div>
									<div><img src="images/A4.jpg"  style="border-radius: 15px;"></div>
								</div>
								<a class="pre" onclick="plusIndex(-1)">&#10094;</a>
								<a class="nxt" onclick="plusIndex(+1)">&#10095;</a>
							</div>
							<br>
							<div style="text-align:center; ">
								<span class="dots" onclick="currentSlide(1)"></span>
								<span class="dots" onclick="currentSlide(2)"></span>
								<span class="dots" onclick="currentSlide(3)"></span>
								<span class="dots" onclick="currentSlide(4)"></span>
							</div>
							
							<script type="text/javascript">
								var slideIndex=1;
								showImage(slideIndex);
								function plusIndex(n){
									showImage(slideIndex+=n);
								}
								function currentSlide(n){
									showImage(slideIndex=n);
								}
								function showImage(n){
									var slide=document.getElementsByClassName("slides");
									if (n>slide.length) {slideIndex=1};
									if (n<1) {slideIndex=slide.length};
									for (var i = 0; i<slide.length; i++) {
										slide[i].style.display="none";
									};
									slide[slideIndex-1].style.display="block";
								}

							</script>
						</td>
					</tr>
				</table>
		</div>

		<div id="intro">
			<br>
			<br>
			<table id="introtable">
				<tr>
			<center><img src="Images/Pictures/(1).jpg" class="introim1" style="margin-left:5px">
					<img src="Images/Pictures/(2).jpg" class="introim1" style="margin-left:5px">

					<img src="Images/Pictures/(9).jpg" class="introim1" style="margin-left:5px">
					<img src="Images/Pictures/(10).jpg" class="introim1" style="margin-left:5px"></center>
					<br>
					<br>
				


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("introim1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>






				</tr>
				<tr>
					<center>
					<img src="Images/Pictures/(3).jpg" class="introim2" style="margin-left:5px">
					<img src="Images/Pictures/(6).jpg" class="introim2" style="margin-left:5px">
					<img src="Images/Pictures/(7).jpg" class="introim2" style="margin-left:5px">
					<img src="Images/Pictures/(8).jpg" class="introim2" style="margin-left:5px"></center>
					<br>
					<br>

					<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("introim2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
			</tr>
				
				<tr><center>
					     <img src="Images/Pictures/(5).jpg" class="introim3" style="margin-left:5px">
						<img src="Images/Pictures/(4).jpg" class="introim3" style="margin-left:5px">
						<img src="Images/Pictures/(11).jpg" class="introim3" style="margin-left:5px"></center>
						<br>
						<br>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("introim3");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</tr>
	<tr><center>
		<td><img src="Images/Pictures/(13).jpg" class="introim4" style="margin-left:5px"></td>
		<td><img src="Images/Pictures/(14).jpg" class="introim4" style="margin-left:5px"></td>
		<td><img src="Images/Pictures/(12).jpg" class="introim4" style="margin-left:5px"></td></center>
	

    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("introim4");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	</tr>
</table>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div>
			<marquee id="marqueetool">Lemornardo Resort</marquee>
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