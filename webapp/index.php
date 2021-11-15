<?php

	include "code.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Log In</title>
</head>
<body>
	<div class="contain row">
		<div class="comm-md-6">
			<h2 class="text-center">Login</h2>
			<form action="code.php" method="POST>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
				</div>
				<p class="text-center" style="color:red;">
					<?php echo $role; ?>
				</p>
				<div class="form-group">
					<input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
				</div>
			</form>
		</div>
	</div>
</body>
</html>

