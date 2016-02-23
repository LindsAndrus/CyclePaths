<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
	<title>Seller Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

  <div class="header">
    <?php $this->load->view('header'); ?>
  </div>

<div class="container">
	<div class="edit">	
	    <h3>Edit Here!</h3>
    	<?php if($this->session->flashdata('edit_errors')[0]) : ?>
    		<div class="error"><?= $this->session->flashdata('edit_errors')[0]?></div>
		<?php endif?>
		<form action="/users/update" method="post">
			<h4>First Name</h4><input value="<?=$user['first_name']?>" type="text" name="first_name">
			<h4>Last Name</h4><input value="<?=$user['last_name']?>" type="text" name="last_name">
			<h4>Email</h4><input value="<?=$user['email']?>" type="text" name="email">
			<h4>Password</h4><input type="password" name="password">
			<input type="hidden" name="id" value="<?= $user['id']?>">
			<br>
			<input type="submit" value="Edit Account" class="btn btn-primary">
		</form>
	</div>
</div>

</body>
</html>
