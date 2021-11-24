<?php 

	$con = mysqli_connect('localhost', 'root', '112358', 'security_task');

	if(isset($_POST["submit"])) {
		$email = $_POST["email"];
		$password = $_POST["userpassword"];


		$login_query= mysqli_query($con, "SELECT count(*) as total_users from  users where email = '".$email."' and password = '".$password."'") or die(mysqli_error($con));

		$result = mysqli_fetch_array($login_query);

		if($result['total_users'] > 0){
			// echo "<script>alert('Log In Successful!');</script>";
			sleep(1);
			header('Location:dashboard.html');
			echo "<script>alert('Log In Successful!');</script>";
		}
		else {
			echo "<h5>INCORRECT Credentials</h5>";
		}
	}
?>
