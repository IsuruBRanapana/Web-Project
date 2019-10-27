<?php  
	require_once('inc/connection.php');
?>
<?php 
if (isset($_POST['login'])) {

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$tel_no=$_POST['tel_no'];
	$passwrd=$_POST['password'];
	$password=md5($passwrd);
	$repasswrd=$_POST['repassword'];
	$repassword=md5($repasswrd);
	$repassword1=sha1($repasswrd);
	if ($password==$repassword) {
		$query="INSERT INTO user(first_name,last_name,gender,email,tel_no,password,confirm_password) VALUES ('$first_name','$last_name','$gender','$email','$tel_no','$password','$repassword1')";
		$result=mysqli_query($connection,$query);
		if ($result) {
			echo "Data Added";
		}else{
			echo "Fail";
		}
	}else{
		echo "Password Dismatch";
	}
	
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
		<div>
			<center>
			<div id="intro">
				<div class="inpt">
					<form action="Signup.php" method="post" class="form">
						<h2 style="color: #fff;">Sign Up</h2><br>
						<input type="text" name="first_name" placeholder="Enter the First Name" class="inpt" required><br><br>
						<input type="text" name="last_name" placeholder="Enter the Last Name" class="inpt" required><br><br>
						<input type="text" name="gender" placeholder="Enter the Gender" class="inpt" required><br><br>
						<input type="email" name="email" placeholder="Enter the E-mail" class="inpt" required><br><br>
						<input type="text" name="tel_no" placeholder="Enter the Tel. No." class="inpt" required><br><br>
						<input type="password" name="password" placeholder="Enter the Password" class="inpt" required><br><br>
						<input type="password" name="repassword" placeholder="Enter the Confirm Password" class="inpt" required><br><br>
						<input type="submit" name="login" value="Sign Up">
					</form>
				</div>
				<br>
				<br>
				<div class="inpt">
					<a href="login.php"><input type="submit" value="Log In" style="margin-left: 30px;"></a>
				</div>
				<br>
				<br>
				<br>
			</div>
			</center>
		</div>
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
<?php mysqli_close($connection); ?>
