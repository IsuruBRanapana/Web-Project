<?php  
	require_once('inc/connection.php');
?>
<?php  
		
		$first_name=mysqli_real_escape_string($connection,$_POST['first_name1']);
		$last_name=mysqli_real_escape_string($connection,$_POST['last_name1']);
		$email=mysqli_real_escape_string($connection,$_POST['email1']);
		$tel_no=mysqli_real_escape_string($connection,$_POST['tel_no1']);
		$gender=mysqli_real_escape_string($connection,$_POST['gender1']);
		$from_date=mysqli_real_escape_string($connection,$_POST['from_date']);
		$to_date=mysqli_real_escape_string($connection,$_POST['to_date']);
		$number_of_adults=mysqli_real_escape_string($connection,$_POST['number_of_adults']);
		$number_of_childs=mysqli_real_escape_string($connection,$_POST['number_of_childs']);
		$rooms=mysqli_real_escape_string($connection,$_POST['rooms']);

		/*echo $first_name;
		echo $last_name;
		echo $email;
		echo $tel_no;
		echo $gender;
		echo $from_date;
		echo $to_date;
		echo $number_of_childs;
		echo $number_of_adults;
		echo $rooms;*/


		$query="INSERT INTO bookingtbl(first_name,last_name,email,tel_no,gender,from_date,to_date,number_of_adults,number_of_childs,rooms) VALUES ('$first_name','$last_name','$email','$tel_no','$gender','$from_date','$to_date','$number_of_adults','$number_of_childs','$rooms')";
		$result=mysqli_query($connection,$query);
		if ($result) {
			echo "Data Added";
		}else{
			echo "Fail";
		}
?>
<?php mysqli_close($connection); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
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
			<form action='booking01.php' method="post">
				<h2>Successfully added Your Booking. Go back : </h2>
				<input type="submit" name="login" value="Okay" class="abc">
				<br>
				<br>
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