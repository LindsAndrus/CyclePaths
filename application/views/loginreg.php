<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
	<style type="text/css">
	.register{
    margin-left: 10px;
    display: inline-block;
    background-color: #D8D8D8;	
    border-radius: 10px;
    padding: 10px 14px 15px 20px;
    margin-top: 70px;
	}
  .login{
    margin-left: 50px;
    display: inline-block;
    background: #D8D8D8;
    border-radius: 10px;
    padding: 10px 14px 15px 20px;
    vertical-align: top;
    margin-top: 70px;
  }
	.btn{
		margin-top: 10px;
	}
  .content{
    width: 700px;
    border: 1px solid gray;
    border-radius: 10px;
    margin: 5px 0 100px 80px;
    padding: 0 0 50px 120px;
  }
	</style>
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