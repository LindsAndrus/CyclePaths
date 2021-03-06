<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/home.css">
  

  <!-- Latest compiled and minified JavaScript -->
<title>Cycle Path Homepage</title>
</head>

<body>
	<?php $this->load->view('header') ?>

  <!-- create hyperlink around img and button in addition to the hyperlink -->


  <div class="container-fluid bg-1 text-center" id="main_container">
      <div class="row" id="row_1">
        <div class="col-md-3" id="wheel">
          <a href="search/wheels">
            <img src="/assets/images/categories/wheels.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Wheels</button>
          </a>
        </div>
        <div class="col-sm-3" id="brakes">
          <a href="search/brakes">
            <img src="/assets/images/categories/brakes.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Brakes</button>
          </a>
        </div>

        <div class="col-sm-3" id="chains">
          <a href="search/derailleurs">
            <img src="/assets/images/categories/derailleur.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Shifters/Derailleurs</button>
          </a>
        </div>

        <div class="col-sm-3" id="crankset">
          <a href="search/grips">
            <img src="/assets/images/categories/handlebar.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Handlebars/Grips</button>
          </a>
        </div>
    </div>

    <div class="row" id="row_2">
        <div class="col-sm-3" id="derailleur">
          <a href="search/pedals">
            <img src="/assets/images/categories/pedals.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Pedals/Cleats</button>
          </a>
        </div>

        <div class=" col-sm-3" id="handlebar">
          <a href="search/crankset">
            <img src="/assets/images/categories/crankset.jpg" width="180px" height="180px";>
           <button class="btn btn-default" type="button">Cranksets/Chainsets</button>
          </a>
        </div>

        <div class=" col-sm-3" id="pedals">
          <a href="search/chains">
            <img src="/assets/images/categories/chains.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Chains/Cassettes</button>
          </a>
        </div>
        <div class=" col-md-3" id="saddle">
          <a href="search/saddles">
            <img src="/assets/images/categories/saddle.jpg" width="180px" height="180px";>
            <button class="btn btn-default" type="button">Saddles/Seats/Seatposts</button>
          </a>
        </div>
    </div>

  </div>


    <div class="content" id="home_content">
      <div class="seller col-md-6">
        <h4>Seller of the Week</h4>
        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
      </div>
      <div class="item col-md-6">
        <h4>Item of the Week</h4>
        <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?</p>
      </div>
    </div>
 
</body>
</html>