<?php
	require_once 'config.php';

	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$myEmail = $_POST['inputEmail'];
		$myName = $_POST['inputName'];
		$myPassword = $_POST['inputPassword'];
		$myRepetPassword = $_POST['inputRepeatPassword'];

		/*Check if all fields are filled, and check if user with same email exists.
			Display what went wrong to user.*/
		if(!empty($_POST['inputEmail']))
		{
			$sql = "SELECT id, email, name, password FROM client WHERE email = '$myEmail'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if ($result->num_rows == 0)
			{
				if(!empty($_POST['inputName']))
				{
					if(!empty($_POST['inputPassword']))
					{
						if(!empty($_POST['inputRepeatPassword']))
						{
							if($myPassword === $myRepetPassword)
							{
								$sql = "INSERT INTO client (email, name, password)
										VALUES ('$myEmail', '$myName', '$myPassword')";
								$result = $conn->query($sql);

								echo "<script>
								window.location.href='http://localhost/QuantoxTest2/login_form.php';
								</script>";
							}
							else
							{
								$message = "Passwords don't match.";
								echo "<script type='text/javascript'>alert('$message');
								window.location.href='http://localhost/QuantoxTest2/register_form.php';</script>";
							}
						}
						else
						{
							$message = "Please fill comfirm password field.";
							echo "<script type='text/javascript'>alert('$message');
							window.location.href='http://localhost/QuantoxTest2/register_form.php';</script>";
						}
					}
					else
					{
						$message = "Please enter your password.";
						echo "<script type='text/javascript'>alert('$message');
						window.location.href='http://localhost/QuantoxTest2/register_form.php';</script>";
					}
				}
				else
				{
					$message = "Please enter your name.";
					echo "<script type='text/javascript'>alert('$message');
					window.location.href='http://localhost/QuantoxTest2/register_form.php';</script>";
				}
			}
			else
			{
				$message = "Email already used.";
				echo "<script type='text/javascript'>alert('$message');
				window.location.href='http://localhost/QuantoxTest2/register_form.php';</script>";
			}
		}
		else
		{
			$message = "Please enter your email.";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='http://localhost/QuantoxTest2/register_form.php';</script>";
		}
	}
	else
	{
		$message = "REQUEST_METHOD not equal POST";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
?>
