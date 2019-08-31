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
							echo "<font color='white'>";
								echo "<div>";
									echo "<center>";
										echo "<div id='intro'>";
											$id=$row['id'];
											$first_name = $row['first_name'];
											$last_name = $row['last_name'];
											$email = $row['email'];
											$tel_no = $row['tel_no'];
											$gender = $row['gender'];
											$from_date=$row['from_date'];
											$to_date=$row['to_date'];
											$number_of_adults=$row['number_of_adults'];
											$number_of_childs=$row['number_of_childs'];
											$rooms=$row['rooms'];

											echo "<table>";
												echo "<tr>";
													echo "<td>";
														echo "First Name :";
													echo "</td>";
													echo "<td>";
														echo $first_name;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "Last Name :";
													echo "</td>";
													echo "<td>";
														echo $last_name;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "E-mail :";
													echo "</td>";
													echo "<td>";
														echo $email;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "Tel. No. :";
													echo "</td>";
													echo "<td>";
														echo $tel_no;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "Gender :";
													echo "</td>";
													echo "<td>";
														echo $gender;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "From :";
													echo "</td>";
													echo "<td>";
														echo $from_date;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "To :";
													echo "</td>";
													echo "<td>";
														echo $to_date;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "Number of adults :";
													echo "</td>";
													echo "<td>";
														echo $number_of_adults;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "Number of Children :";
													echo "</td>";
													echo "<td>";
														echo $number_of_childs;		
													echo "</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>";
														echo "Number of rooms :";
													echo "</td>";
													echo "<td>";
														echo $rooms;		
													echo "</td>";
												echo "</tr>";
											echo "</table>";
											//echo "<br>";
											//echo "<input type='text' hidden name='email' value='".$email."'";
											echo "<form action='booking4.php' method='post'>";
												echo "<input type='hidden' name='email' value='".$email."'>";
												echo "<input type='hidden' name='id' value='".$id."'>";
												echo "<input type='submit' name='submit' value='DELETE' class='abc'>";
											echo "</form>";
										echo "</div>";
									echo "</center>";
								echo "</div>";
							echo "</font>";
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