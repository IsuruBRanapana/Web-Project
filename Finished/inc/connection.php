<?php  
	$server='localhost';
	$user='root';
	$dbname='webproject';
	$connection=mysqli_connect($server,$user,'',$dbname);

	if(mysqli_connect_errno()){
		echo ("Can't connect to database. ".mysqli_connect_error());
	}else{
		//echo "Connection Established";
	}
?>