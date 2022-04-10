<?php 

	$conn = new mysqli("localhost","root","","ATM");

	// Check connection
	if ($conn->connect_error) {
	  echo "Kết nối MYSQLi lỗi" . $conn->connect_error;
	  header('location:error.php');
	  exit();
	}


?>