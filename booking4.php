<?php require_once('inc/connection.php') ?>
<?php  
		if (isset($_POST['submit'])) {
			$id=$_POST['id'];
			$query="DELETE FROM bookingtbl WHERE id='{$id}'";
			$del=mysqli_query($connection,$query);
		}

		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$query1="SELECT * FROM bookingtbl WHERE email='{$email}'";
		$result_set=mysqli_query($connection,$query1);
		//print_r($result_set);
		if ($result_set) {
			if (mysqli_num_rows($result_set)>0) {
				//valid user4
				while ($row = mysqli_fetch_array($result_set)) {
					$id=$row['id'];
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$email = $row['email'];
					$tel_no = $row['tel_no'];
					$gender = $row['gender'];
					$from_date=$row['from_date'];
					echo $id;
					echo $first_name;
					echo $last_name;
					echo $email;
					echo $tel_no;
					echo $gender;
					echo $from_date;
					//echo "<br>";
					//echo "<input type='text' hidden name='email' value='".$email."'";
					echo "<form action='booking4.php' method='post'>";
						echo "<input type='hidden' name='email' value='".$email."'>";
						echo "<input type='hidden' name='id' value='".$id."'>";
						echo "<input type='submit' name='submit' value='DELETE'>";
					echo "</form>";

					echo "<br>";
					echo "<br>";
				}

				
				/*//print_r($row);
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$email = $row['email'];
				$tel_no = $row['tel_no'];
				$gender = $row['gender'];*/

				
			}else{
				$errors[]='Invalid Username / Password';
			}
		}else{
			$errors[]='Database query failed';
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>