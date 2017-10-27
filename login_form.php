<?php $currentPage = 'login'; ?>
<html>
	<head>
		<title>Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>

	<body>
		<?php include('nav_bar.php'); ?>

		<?php
			/*In case user tries to access register_form he will be redirected to
				login_form and the message will appear above form*/
			session_start();
			if(isset($_SESSION['loginMessage']) && !empty($_SESSION['loginMessage']))
			{
				print("<h3>");
				print($_SESSION['loginMessage']);
				print("</h3>");
				unset($_SESSION['loginMessage']);
			}
		?>
		<div class="col-md-4">
			<form class="form-horizontal" id="login-form" action="login.php" method="post" role="form" enctype="multipart/form-data">
				<fieldset>
					<legend>Login</legend>
					<div class="form-group">
					  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
					  <div class="col-lg-10">
						<input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" type="text">
					  </div>
					</div>
					<div class="form-group">
					  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
					  <div class="col-lg-10">
						<input class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" type="password">
					  </div>
					</div>
					<div class="form-group">
					  <div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary" id="register-btn">Submit</button>
					  </div>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>
