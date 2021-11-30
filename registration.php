<?php
	// Linking variables to html form fields
	$username = $_POST['username'];
	$email = $_POST['email'];
	$userpassword = $_POST['userpassword'];

	// Database Connection
	$connect_db = new mysqli('localhost', 'root', '112358', 'security_task');
	if($connect_db->connect_error){
		die('Connection Failed!: '.$connect_db->connect_error);
	}
	else {
		$data_db = $connect_db->prepare("INSERT INTO users(name, email, password) VALUES(?, ?, ?)");
		$data_db->bind_param("sss", $username, $email, $userpassword);
		$data_db->execute();
		// echo "<script type='text/javascript'>alert('You have successfully registered an account!')</script>";
		$data_db->close();
		$connect_db->close();

	}
?>