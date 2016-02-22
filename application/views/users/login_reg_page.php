<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<?php $this->load->view('header') ?>

<div class="container">
  <div class="content">

	<div class="register">	
    <h3>Register Here!</h3>
		<form action="create" method="post">
			<h4>Name</h4><input type="text" name="name">
			<h4>Username</h4><input type="text" name="username">
			<h4>Email</h4><input type="text" name="email">
			<h4>Password</h4><input type="password" name="password">
			<h4>Confirm Password</h4><input type="password" name="confirm_password">
			<br>
			<input type="submit" value="Create Account" class="btn btn-primary">
		</form>
	</div>

	<div class="login">	
    <h3>Login Here!</h3>
		<form action="login" method="post">
			<h4>Username</h4><input type="text" name="username">
			<h4>Password</h4><input type="password" name="password">
			<br>
			<input type="submit" value="Login" class="btn btn-primary">
		</form>
	</div>
  </div>

</div>
	
</body>
</html>