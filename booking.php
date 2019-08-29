<?php require_once('inc/connection.php') ?>
<?php  
	if (isset($_POST['submit_email'])) {
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$query1="SELECT * FROM user WHERE email='{$email}'";
		$result_set=mysqli_query($connection,$query1);
		//print_r($result_set);
			if ($result_set) {
				require_once('inc/autoname.php');
				header('Location: booking2.php');
			}else{
				$errors[]='Database query failed';
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="booking.php" method="post">
		<input type="text" name="email" placeholder="Email">
		<input type="submit" name="submit_email" value="Submit">
	</form>
	
</body>
</html>