<?php
	// Error & success messages
	global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4, $emptyError5;

	// Linking variables to html form fields
	$username = $_POST['username'];
	$email = $_POST['email'];
	$userpassword = $_POST['userpassword'];

	// Database Connection
	$connect_db = new mysqli('localhost', 'Zubrah', 'P@ss123', 'security_task');
	if($connect_db->connect_error){
		die('Connection Failed!: '.$connect_db->connect_error);
	}
	else {
		//password_hash
		$password_hash = password_hash($userpassword, PASSWORD_BCRYPT);

		$data_db = $connect_db->prepare("INSERT INTO users(name, email, password) VALUES(?, ?, ?)");
		$data_db->bind_param("sss", $username, $email, $password_hash);
		$data_db->execute();
		// echo "<script type='text/javascript'>alert('You have successfully registered an account!')</script>";
		if(!$data_db){
			die("MySQL query failed!" . mysqli_error($connect_db));
		} else {
			$success_msg = '<div class="alert alert-success">
				User registered successfully!
		</div>';
		}
		header('Location: /successpage.php');
		$data_db->close();
		$connect_db->close();

	}
?>

./
