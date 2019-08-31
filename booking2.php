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
				<form action="booking3.php" method="post" class="form">
					<table>
						<?php
							echo "<tr>"; 
								echo "<td>";
									echo "First Name : ";
								echo "</td>";
								echo "<td>";
									echo "<input type ='text' name='first_name1' value='".$first_name."' class='inpt'><br>";
								echo "</td>";
							echo "</tr>";
							
							echo "<tr>";
								echo "<td>";
									echo "Last Name : ";
								echo "</td>";
								echo "<td>";
									echo "<input type ='text' name='last_name1' value='".$last_name."' class='inpt'><br>";
								echo "</td>";
							echo "</tr>";
							
							echo "<tr>";
								echo "<td>";
									echo "E-mail : ";
								echo "</td>";
								echo "<td>";
									echo "<input type ='text' name='email1' value='".$email."' class='inpt'><br>";
								echo "</td>";
							echo "</tr>";
							
							echo "<tr>";
								echo "<td>";
									echo "Tel. No. : ";
								echo "</td>";
								echo "<td>";
									echo "<input type ='text' name='tel_no1' value='".$tel_no."' class='inpt'><br>";
								echo "</td>";
							echo "</tr>";
							
							echo "<tr>";
								echo "<td>";
									echo "Gender : ";
								echo "</td>";
								echo "<td>";
									echo "<input type ='text' name='gender1' value='".$gender."' class='inpt'><br>";
								echo "<td>"; 
							echo "</tr>";
						?>
						<tr>
							<td>
								From :
							</td>
							<td> 
								<input type="date" name="from_date" class='inpt' required><br>
							</td>
						</tr>

						<tr>
							<td>
								To :
							</td>
							<td> 
								<input type="date" name="to_date" class='inpt' required><br>
							</td>
						</tr>
						
						<tr>
							<td>
								Number of adults :
							</td>
							<td> 
								<input type="number" name="number_of_adults" min='0' class='inpt'required><br>
							</td>
						</tr>
						
						<tr>
							<td>
								Number of children :
							</td>
							<td> 
								<input type="number" name="number_of_childs" min='0' class='inpt' required><br>
							</td>
						</tr>
						
						<tr>
							<td>
								Number of rooms : 
							</td>
							<td>
								<input type="number" min='0' name="rooms" class='inpt' required><br>
							</td>
						</tr>
					</table>
					<br><br><br>
					<div class="inpt">
						<input type="submit" name="submit" value="Submit"><br>
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