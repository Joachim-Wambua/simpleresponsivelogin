<?php
	session_start();
	include 'config.php';
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$userpassword = $_POST['userpassword'];
		//check login details
		$stmt = $con->prepare("SELECT * FROM users WHERE name = '$username' && password = '$userpassword'");
		$stmt->execute();

		if($stmt->rowCount()>0){
			$stmt->fetch();

			// Check if account exists in database
			if($_POST['userpassword'] === $userpassword){
				// Successful User Login
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['id'] = $id;
				echo 'Welcome ' . $_SESSION['username'] . '!';
				header("location: librarian_dashboard.php");
				$_SESSION['success'] = "<script type='text/javascript'>alert('You are Logged In!')</script>";
			}
			else if ($_POST['userpassword'] !== $userpassword) {
				// Incorrect Credentials
				echo "<script type='text/javascript'>alert('ERROR! Wrong Credentials! Try Again.')</script>";
			}
			
		}
		else{
			header("location: login.php");
			$_SESSION['error'] = "<script type='text/javascript'>alert('ERROR! Wrong Credentials! Try Again.')</script>";
		}
		
	}
?>

