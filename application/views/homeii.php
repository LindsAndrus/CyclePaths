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
  <link rel="stylesheet" type="text/css" href="/assets/css/home.css">

  <!-- Latest compiled and minified JavaScript -->
 
 

	<style type="text/css">

	  #homeii_container{
    	background: url("/assets/images/bike.png");
        background-repeat:no-repeat;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        background-position:center;
        width: 90%;
    }
    #home_content{
      width: 60%;
      margin-left: 20%;
    }

	</style> 
<title>Cycle Path Homepage</title>
</head>

<body>
	<?php $this->load->view('header') ?>
	
  <div class="container-fluid bg-1 text-center" id="homeii_container">
    <div class="row">

      <div class="dropdown col-md-3" id="wheel_dropdown">
        <img src="/assets/images/categories/wheels.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/wheels">Wheels</a>
        </button>
      </div>
     


      <div class="dropdown col-sm-3" id="brakes_dropdown">
        <img src="/assets/images/categories/brakes.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/brakes">Brakes</a>
        </button>
      </div>

      <div class="dropdown col-sm-3" id="chains_dropdown">
        <img src="/assets/images/categories/chains.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/derailleurs">Shifters/Derailleurs</a>
        </button>
      </div>

      <div class="dropdown col-sm-3" id="crankset_dropdown">
        <img src="/assets/images/categories/crankset.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/grips">Handlebars/Grips</a>
        </button>
      </div>
    </div>

    <div class="row">

      <div class="dropdown col-sm-3" id="derailleur_dropdown">
        <img src="/assets/images/categories/derailleur.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/pedals">Pedals/Cleats</a>
        </button>
      </div>

      <div class="dropdown col-sm-3" id="handlebar_dropdown">
        <img src="/assets/images/categories/handlebar.jpg" width="180px" height="180px";>
       <button class="btn btn-default" type="button">
          <a href="search/crankset">Cranksets/Chainsets</a>
        </button>
      </div>

      <div class="dropdown col-sm-3" id="pedals_dropdown">
        <img src="/assets/images/categories/pedals.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/chains">Chains/Cassettes</a>
        </button>
      </div>

        
      <div class="dropdown col-md-3" id="saddle_dropdown">
        <img src="/assets/images/categories/saddle.jpg" width="180px" height="180px";>
        <button class="btn btn-default" type="button">
          <a href="search/saddles">Saddles/Seats/Seatposts</a>
        </button>
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