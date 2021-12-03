<!-- <?php

	// Database connection
    include('config.php');

	// Error & success messages
	global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4, $emptyError5;


	// Linking variables to html form fields
	$username = $_POST['username'];
	$email = $_POST['email'];
	$userpassword = $_POST['userpassword'];

	// verify if email exists
	$emailCheck = $conn->query( "SELECT * FROM users WHERE email = '{$email}' ");
	$rowCount = $emailCheck->fetchColumn();


	if(!empty($username) && !empty($email) && !empty($password)){
            
		// check if user email already exist
		if($rowCount > 0) {
			$email_exist = '
				<div class="alert alert-danger" role="alert">
					User with email already exist!
				</div>
			';
		} else {
		// Database Connection
		$connect_db = new mysqli('localhost', 'Zubrah', 'P@ss123', 'security_task');
		if($connect_db->connect_error){
			die('Connection Failed!: '.$connect_db->connect_error);
		}
		else {
			//password_hash
			$password_hash = password_hash($password, PASSWORD_BCRYPT);

			$data_db = $connect_db->prepare("INSERT INTO users(name, email, password) VALUES(?, ?, ?)");
			$data_db->bind_param("sss", $username, $email, $password_hash);
			$data_db->execute();
			if(!$data_db){
				die("MySQL query failed!" . mysqli_error($connect_db));
			} else {
				$success_msg = '<div class="alert alert-success">
					User registered successfully!
			</div>';
			}
			// echo "<script type='text/javascript'>alert('You have successfully registered an account!')</script>";
			$data_db->close();
			$connect_db->close();

		}
	}
	} else {
		if(empty($username)){
			$emptyError1 = '<div class="alert alert-danger">
				Username is required.
			</div>';
		}
		if(empty($email)){
			$emptyError3 = '<div class="alert alert-danger">
				Email is required.
			</div>';
		}
		if(empty($password)){
			$emptyError5 = '<div class="alert alert-danger">
				Password is required.
			</div>';
		}            
	}
}
?> -->