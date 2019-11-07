<?php
session_start();
echo ".";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Miniproject</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login Here</h2>
					<form action="validation.php" method="post">
						<div class="form-grp">
							<label>Username</label>
							<input type="text" name="user" class="form-control"required autocomplete="off">
						</div>
						<div class="form-grp">
							<label>Password</label>
							<input type="password" name ="password"id="Password" class="form-control"required>
						</div>
						<input type="submit" class="btn btn-primary"name="sub">
					</form>
				</div>
				

				<div class="col-md-6 login-right">
					<h2>Register Here</h2>
					<form action="registration.php" method="post">
						<div class="form-grp">
							<label>Username</label>
							<input type="text" name="user" class="form-control"required autocomplete="off">
						</div>
						<div class="form-grp">
							<label>Password</label>
							<input type="Password" name="password" id="Password"class="form-control"required>
						</div>
						<button type="submit" class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>