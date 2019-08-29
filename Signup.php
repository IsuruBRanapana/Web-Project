<?php  
	require_once('inc/connection.php');
?>
<?php 
if (isset($_POST['login'])) {

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$tel_no=$_POST['tel_no'];
	$passwrd=$_POST['password'];
	$password=md5($passwrd);
	$repasswrd=$_POST['repassword'];
	$repassword=md5($repasswrd);
	$repassword1=sha1($repasswrd);
	if ($password==$repassword) {
		$query="INSERT INTO user(first_name,last_name,email,tel_no,password,confirm_password) VALUES ('$first_name','$last_name','$email','$tel_no','$password','$repassword1')";
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
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="Signup.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style>
		#msg{
			visibility: hidden;
			min-width: 250px;
			background-color: yellow;
			color: #000;
			text-align: center;
			border-radius: 2px;
			padding: 16px;
			position: fixed;
			z-index: 1;
			right: 30%;
			top: 30px
			font-size:17px;
			margin-right: 30px;
		}

		#msg.show{
			visibility: visible;;
			-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;
			animation:fadein 0.5s, fadeout 0.5s 2.5s;
		}
		@-webkit-keyframes fadein{
			from{top: 0; opacity: 0;}
			to{top: 30px;opacity: 1;}
		}
		@keyframes fadein{
			from{top: 0; opacity: 0;}
			to{top: 30px;opacity: 1;}
		}
		@-webkit-keyframes fadeout{
			from{top: 30px; opacity: 1;}
			to{top: 0;opacity: 0;}
		}
		@keyframes fadeout{
			from{top: 30px; opacity: 1;}
			to{top: 0;opacity: 0;}
		}
	</style>
</head>
<body>
	<div class="signup">
	<form action="Signup.php" method="post">
		<h2 style="color: #fff;">Sign Up</h2><br>
		<input type="text" name="first_name" placeholder="First Name"><br><br>
		<input type="text" name="last_name" placeholder="Last Name"><br><br>
		<input type="email" name="email" placeholder="E-mail"><br><br>
		<input type="text" name="tel_no" placeholder="Tel. No."><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="password" name="repassword" placeholder="Confirm Password"><br><br>
		<input type="submit" name="login" value="Sign Up">
	</form>
	</div>
	<br>
	<br>
	<div id="home">
		<a href="login.php"><input type="submit" value="Log In" style="margin-left: 30px;"></a>
	</div>
</body>
</html>
<?php mysqli_close($connection); ?>