<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "fill"
    });
  });
  $(function() {
    $( "#accordion-resizer" ).resizable({
      minHeight: 140,
      minWidth: 200,
      resize: function() {
        $( "#accordion" ).accordion( "refresh" );
      }
    });
  });
  </script>


	<style type="text/css">
	.container{
		width: 900px;
		margin: auto;
	}
	.container{
		background: url("assets/images/bike.png");
		background-repeat:no-repeat;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		background-size:cover;
		background-position:center;
	}
/*	.search{
		width: 900px;
		margin: auto;
		padding: 180px 0 0 0;
	}*/
	.btn{
		margin: 10px 0 0 160px; 
	}
	.btn2{
		margin: 30px 0 0 90px;
	}
	.content{
		margin-top: 30px;
	}
	#accordion{
		width: 300px;
		margin: auto;
		float: left;
		margin-top: 20px;
	}
	</style>
	<title>Cycle Path Homepage</title>
</head>
<body>
	<?php $this->load->view('header') ?>
	
<div class="container">
<div id="accordion">
  <h3>Know what you want?</h3>
  <div>
    <p>
    Search below!!!
    </p>
  </div>


  <h3>Wheels</h3>
  <div>
    <p>
    The thing that turns!
    </p>
  </div>
  <h3>Brakes</h3>
  <div>
    <p>
    Things to stop your bike.
    </p>
  </div>
  <h3>Shifters/Derailleurs</h3>
  <div>
    <p>
    Things that shift and derail.
    </p>
    <ul>
      <li>Sub 1</li>
      <li>Sub 2</li>
      <li>Sub 3</li>
    </ul>
  </div>
  <h3>Handlebars/Grips</h3>
  <div>
    <p>
    Things to hang onto.
    </p>
  </div>

  <h3>Pedals/Cleats</h3>
  <div>
    <p>
    Things to pedal with.
    </p>
  </div>

  <h3>Cranksets/Chainrings/Chainsets</h3>
  <div>
    <p>
    Things to crank with.
    </p>
  </div>

  <h3>Chains/Cassettes</h3>
  <div>
    <p>
    <a href = "listings/search_results/$1">Things like chains.</a>
    </p>
  </div>

  <h3>Saddles/Seats/Seatposts</h3>
  <div>
    <p>
    Things to sit on.
    </p>
  </div>

</div>

</div>
 
</body>
</html>

</body>
</html>