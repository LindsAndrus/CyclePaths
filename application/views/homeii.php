<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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

	#homeii_container{
    	background: url("assets/images/bike.png");
        background-repeat:no-repeat;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        background-position:center;
    }

	</style> 
<title>Cycle Path Homepage (v2)</title>
</head>

<body>
	<?php $this->load->view('header') ?>
	
	<div id="homeii_container">
  
	<div id="accordion">
	    <h3>Know what you want?</h3>
	    <div>
	      <p>
	      Search below!!!
	      </p>
	    </div>

	    <?php foreach ($matches as $match) { ?> 
	    <h3><?= $match['name'] ?></h3>
	    <a href="listings/search_results/<?= $match['id'] ?>"
	    <p><?= $match['description']  ?></p>
	    </a>
	    <?php } ?>
	</div>

</div>
 
</body>
</html>

</body>
</html>