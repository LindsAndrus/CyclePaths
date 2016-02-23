<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	
  	<style type="text/css">
  	#about_container{
	background: url("assets/images/bike.png");
	background-repeat:no-repeat;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
	background-position:center;
	}
	</style>

  	<title>About Cycle Path</title>
</head>
<body>
	<?php $this->load->view('header') ?>

	<div id="about_container">
		
		<div class="about_text">
			<h2 id="about_header">About CyclePaths</h2>
			<p>On a cold and dreary winter Seattle day, four students came together with a mutual dream of creating the best bike-parts sales platform ever. The four 'Cyclepaths' thought a simple easy to use directory of used parts would help budget savy bikers find the parts to bring their hogs to life. </p>
		</div>
		
		<div class="portrait">
			<img src="assets/images/portrait.png" class="about_portrait" id="nick">
			<img src="assets/images/portrait.png" class="about_portrait" id="steven"><br>
			<img src="assets/images/portrait.png" class="about_portrait" id="lindsey">
			<img src="assets/images/portrait.png" class="about_portrait" id="ethan">
		</div>

		<!-- If time allows, incorporate hover function to display team member bio -->

	</div>
</body>
</html>