
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style type="text/css">

	.logo {
	margin-left: 25px;
	padding-top: 10px;
	padding-bottom: 10px;

	}
	.masthead{
		width:530px;
		margin: auto;
	}
	.nav-justified li a{
	border: 1px solid #d5d5d5;

	
	}
	
</style>
</head>
<body>

<div class="masthead">
	<div class="logo">
		<img src="/assets/images/cyclepathlogo.png"></img>
	</div>
	<ul class="nav nav-pills nav-justified">
		<li><a href="/home">HOME</a></li>
    	<?php if($this->session->userdata('user_id')) : ?>
			<li><a href="/logout">LOGOUT</a></li>
	 	<?php else : ?>
	 		<li><a href="/login">LOGIN/REGISTRATION</a></li>
	 	<?php endif ?>
		<li><a href="/about">ABOUT</a></li>
		<li><a href="/contact">CONTACT US</a></li>
	</ul>
</div>

</body>
</html>
