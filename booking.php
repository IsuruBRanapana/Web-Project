<?php 
	if (isset($_POST['login'])) {
		header('Location: login1.php');
	}elseif (isset($_POST['signup'])) {
		header('Location: Signup.php');
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link href="Style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="body">
		<div class="nav">
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Events.php">Events</a></li>
				<li><a href="Pictures.php">Portfolio</a></li>
				<li><a href="Booking.php">Booking</a></li>
				<li><a href="About Me.php">About Us</a></li>
			</ul>
		</div>
		<div><center>
			<div id="intro">
			<form action='booking.php' method="post">
				<h2>If you have an account : </h2>
				<input type="submit" name="login" value="Log In" class="abc">
				<br>
				<br>
				<h2>Haven't any account : </h2>
				<input type="submit" name="signup" value="Sign Up" class="abc">
			</form>
		</div></center>
		</div>
		<br>
		<br><br>
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