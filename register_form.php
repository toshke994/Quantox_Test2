<?php $currentPage = 'register'; ?>
<html>
	<head>
		<title>Register</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>

	<body>
		<?php include('nav_bar.php'); ?>

		<div class="col-md-8">
			<form class="form-horizontal" id="register-form" action="register.php" method="post" role="form" enctype="multipart/form-data">
				<fieldset>
					<legend>Registration</legend>
					<div class="form-group">
					  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
					  <div class="col-lg-10">
						<input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" type="text">
					  </div>
					</div>
					<div class="form-group">
					  <label for="inputName" class="col-lg-2 control-label">Name</label>
					  <div class="col-lg-10">
						<input class="form-control" id="inputName" name="inputName" placeholder="Name" type="text">
					  </div>
					</div>
					<div class="form-group">
					  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
					  <div class="col-lg-10">
						<input class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" type="password">
					  </div>
					</div>
					<div class="form-group">
					  <label for="inputRepeatPassword" class="col-lg-2 control-label">Repeat Password</label>
					  <div class="col-lg-10">
						<input class="form-control" id="inputRepeatPassword" name="inputRepeatPassword" placeholder="Repeat Password" type="password">
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
