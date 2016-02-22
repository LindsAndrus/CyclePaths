<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
	<link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>
	<?php $this->load->view('header') ?>

<div class="container">
  <div class="content">

	<div class="register">	
    <h3>Register Here!</h3>
		<form action="register" method="post">
			<h4>Name</h4><input type="text" name="name">
			<h4>Username</h4><input type="text" name="username">
			<h4>Email</h4><input type="text" name="email">
			<h4>Password</h4><input type="password" name="password">
<<<<<<< HEAD
=======
			<h4>Confirm Password</h4><input type="password" name="confirm_password">
>>>>>>> d3e154be614892eab1e772233570a16f346b64c4
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