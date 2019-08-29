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
				/*echo $last_name;
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
		<?php 
			echo "First Name : ";
			echo "<input type ='text' name='first_name1' value='".$first_name."'><br>";
			echo "Last Name : ";
			echo "<input type ='text' name='last_name1' value='".$last_name."'><br>";
			echo "E-mail : ";
			echo "<input type ='text' name='email1' value='".$email."'><br>";
			echo "Tel. No. : ";
			echo "<input type ='text' name='tel_no1' value='".$tel_no."'><br>";
			echo "Gender : ";
			echo "<input type ='text' name='gender1' value='".$gender."'><br>"; 

		?>
		From : 
		<input type="date" name="from_date"><br>
		To : 
		<input type="date" name="to_date"><br>
		Number of adults : 
		<input type="text" name="number_of_adults"><br>
		Number of children : 
		<input type="text" name="number_of_childs"><br>
		Number of rooms : 
		<input type="text" name="rooms"><br>
		<input type="submit" name="submit" value="Submit"><br>
	</form>
</body>
</html>