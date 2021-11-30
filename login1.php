<?php
	include 'config.php';
	
	session_start();
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$userpassword = $_POST['userpassword'];
		//check login details
		$stmt = $con->prepare("SELECT * FROM users WHERE name = '$username' && password = '$userpassword'");
		$stmt->execute();
		if($stmt->rowCount()>0){
			$_SESSION['username'] = $username;
			header("location: dashboard.php");
			$_SESSION['success'] = "<script type='text/javascript'>alert('You are Logged In!')</script>";
		}
		else{
			header("location: login.php");
			$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Oh snap! Invalid login details.</div>";
		}
		
	}
?>

