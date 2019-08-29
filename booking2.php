<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Booking 2</title>
</head>
<body>
	<form action="booking.php" method="post">
		<?php 
			require_once('inc/autoname.php');
			echo "<input type='text' name='first_name' value='".$first_name."'>";
		 ?>
	</form>
</body>
</html>