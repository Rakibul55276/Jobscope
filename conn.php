<?php
	$con = mysqli_connect('localhost','root','','jobscope');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>