<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
	.container{
		width: 900px;
		margin: auto;
	}
	.searchcontainer{
		background: url("assets/images/bike.png");
		background-repeat:no-repeat;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		background-size:cover;
		background-position:center;
	}
	.search{
		width: 400px;
		margin: auto;
		padding: 180px 0 0 0;
	}
	.btn{
		margin: 10px 0 0 160px; 
	}
	.btn2{
		margin: 30px 0 0 90px;
	}
	.content{
		margin-top: 30px;
	}
	</style>
	<title>Cycle Path Homepage</title>
</head>
<body>
	<?php $this->load->view('header') ?>

<div class="container">
	<div class="searchcontainer">
		<div class="search">
			<form action="search" method="post">
				<input type="text" class="form-control" id="searchbar">
				<input type="submit" class="btn btn-primary">
			</form>
			<form="register" method="post">
				<input type="submit" class=" btn2 btn btn-success" value="Not a member? Register here!">
			</form>
		</div>
	</div>

	<div class="content">
		<div class="seller col-md-6">
			<h4>Seller of the Week</h4>
			<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
		</div>
		<div class="item col-md-6">
			<h4>Item of the Week</h4>
			<p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?</p>
		</div>
	</div>

</div>
</body>
</html>