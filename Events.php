<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<link href="Style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="body">
		
		<div class="nav">
			<ul>
				<li><b><a href="Home.php">Home</a></b></li>
				<li><b><a href="Events.php">Events</a></b></li>
				<li><b><a href="Pictures.php">Portfolio</a></b></li>
				<li><b><a href="Booking.php">Booking</a></b></li>
				<li><b><a href="About Me.php">About Us</a></b></li>
			</ul>
		</div>
		<div>
			<br>
			<br>
				<table class="slidetable">
					<tr>
						<td>

							<div class="slide-container">
								<div class="slides fade">
									<div class="number">1/4</div>
									<div class="A"><img src="images/Event1.jpg" style="border-radius: 15px;"></div>
								</div>
								<div class="slides fade">
									<div class="number">2/4</div>
									<div class="A"><img src="images/Event2.jpg" style= "border-radius: 15px;"></div>
								</div>
								<div class="slides fade">
									<div class="number">3/4</div>
									<div class="A"><img src="images/Event3.jpg" style="border-radius: 15px;"></div>
								</div>
								<div class="slides fade">
									<div class="number">4/4</div>
									<div class="A"><img src="images/Event4.jpg" style="" "border-radius: 15px;"></div>
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
			<h2>Upcoming Events</h2>
			<img src="images/EventChristmas.jpg" class="introim">
			<h3>Christmas</h3>
			<p>
				We organize a christmas event at 25<sup>th</sup> night at the beach side. We hope to make your Christmas day unforgottable. Be sure us and we kindly invite all of our customers to join with us.
			</p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			<img src="images/EventsNewYear.jpg" class="introim">
			<h3>New Year</h3>
			<p>
				We organize a New Year party at 31<sup>st</sup> night at the pool side. We hope to make your New Year unforgottable. We organize a traditional event at 1 <sup>st</sup> of 2019. Be sure us and we kindly invite all of our customers to join with us.
			</p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
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