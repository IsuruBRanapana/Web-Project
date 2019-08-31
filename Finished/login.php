<?php require_once('inc/connection.php') ?>
<?php  
	//check for submition
	if (isset($_POST['login'])) {

		$errors=array();
		//check user name and password
		if (!isset($_POST['email'])||strlen(trim($_POST['email']))<1) {
			$errors[]='Username is missing / invalid';
		}
		if (!isset($_POST['password'])||strlen(trim($_POST['password']))<1) {
			$errors[]='Password is missing / invalid';
		}

		//check if there are any errors in the form
		if (empty($errors)) {
			//assign variables
			$email=mysqli_real_escape_string($connection,$_POST['email']);
			$passwrd=mysqli_real_escape_string($connection,$_POST['password']);
			$password=md5($passwrd);  

			//create query
			$query="SELECT * FROM user WHERE email='{$email}' AND password = '{$password}' LIMIT 1";

			$result_set=mysqli_query($connection,$query);
			if ($result_set) {
				if (mysqli_num_rows($result_set)==1) {
					//valid user
					header('Location: booking01.php');
				}else{
					$errors[]='Invalid Username / Password';
				}
			}else{
				$errors[]='Database query failed';
			}
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
				<form action="login.php" method="post" class="form">
					<div class="inpt">
						<h2 style="color: white">Log In </h2>
						<?php  
							if (isset($errors)&& !empty($errors)) {
								echo "Invalid Username or Password";
								//print_r($errors);
							}
						?>
						<input type="email" name="email" placeholder="E-mail" class="inpt"><br>
						<input type="password" name="password" placeholder="Password" class="inpt"><br><br>
						<input type="submit" name="login" value="Log In"><br><br><br>
						Don't have account ? <a href="Signup.php">&nbsp;Sign Up</a>
					</div>
				</form>
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