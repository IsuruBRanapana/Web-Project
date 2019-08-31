
<?php
	if (mysqli_num_rows($result_set)==1) {
		//valid user
		//print_r($result_set);
		$row = mysqli_fetch_array($result_set);
		//print_r($row);
		$first_name=$row['first_name'];
		$last_name=$row['last_name'];
		$tel_no=$row['tel_no'];
		echo $first_name;
		echo $last_name;
		echo $tel_no;
	}else{
		$errors[]='Invalid Username / Password';
	}

?>