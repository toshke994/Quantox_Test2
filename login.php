<?php
require_once 'config.php';

session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$myEmail = $_POST['inputEmail'];
		$myPassword = $_POST['inputPassword'];

		$sql = "SELECT email, name, password FROM client WHERE email = '$myEmail' and password = '$myPassword'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if ($result->num_rows == 1 && $row["email"]===$myEmail && $row["password"]===$myPassword) 
		{
			$_SESSION['currentEmail'] = $myEmail;
			$myName = $row["name"];
			$message = "Welcome " . $myName . "!";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='http://localhost/QuantoxTest2/results_form.php';</script>";
		}	
		else
		{
			$message = "Wrong username or password!";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='http://localhost/QuantoxTest2/login_form.php';</script>";
		}
		$conn->close();

	}
?>