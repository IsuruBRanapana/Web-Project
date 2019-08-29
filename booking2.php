<?php require_once('inc/connection.php') ?>
<?php  
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$query1="SELECT * FROM user WHERE email='{$email}'";
		$result_set=mysqli_query($connection,$query1);
		//print_r($result_set);
		if ($result_set) {
			if (mysqli_num_rows($result_set)==1) {
				//valid user
				$row = mysqli_fetch_array($result_set);
				//print_r($row);
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$email = $row['email'];
				$tel_no = $row['tel_no'];
				$gender = $row['gender'];

				/*echo $first_name;
				echo $last_name;
				echo $email;
				echo $tel_no;
				echo $gender;*/
			}else{
				$errors[]='Invalid Username / Password';
			}
		}else{
			$errors[]='Database query failed';
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Booking 2</title>
</head>
<body>
	<form action="booking3.php" method="post">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>