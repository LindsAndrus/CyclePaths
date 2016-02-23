<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create a Listing</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  
</head>     
<body>  
<?php $this->load->view('header.php') ?>

<div class="container" id="createcontainer">
  <!-- <div class="row">
    <div class="col-md-5"> -->
	<h3>Create A Listing Here!</h3>

  <form action='/listings/create_item' method='post' class="well">
    
    <div>
      Name: <input type='text' name='name' class="form-control"></input>      
    </div>
    <div>
      Category: <select type='select' name='category' class="form-control">
        <option value="wheels">Wheels</option>
        <option value="brakes">Brakes</option>
        <option value="shifters/derailleurs">Shifters/Derailleurs</option>
        <option value="handbars/grips">Handbars/Grips</option>
        <option value="pedals/cleats">Pedals/Cleats</option>
        <option value="cranksets/chainrings/chainsets">Cranksets/Chainrings/Chainsets</option>
        <option value="chains/cassettes">Chains/Cassettes</option>
        <option value="saddles/seats/seatposts">Saddles/Seats/Seatposts</option>
      </select>      
    </div>
   
    <div>
      Brand: <select type='select' name='brand' class="form-control">
        <option value="cannondale">Cannondale</option>
        <option value="giant">Giant</option>
        <option value="gt">GT</option>
        <option value="kona">Kona</option>
        <option value="marin">Marin</option>
        <option value="merida">Merida</option>
        <option value="santa cruz bicycles">Santa Cruz Bicycles</option>
        <option value="scott">Scott</option>
        <option value="specialized">Specialized</option>
        <option value="trek">Trek</option>
        <option value="other">Other</option>
      </select>       
    </div>

    <div>
      Description: <input type='text' name='description' class="form-control"></input> 
    </div>

    <div>
      Price: <input type='number' name='price' step="0.01" class="form-control"></input> 
    </div>
    
    <div>
      <label class="btn btn-success .btn-xs" for="my-file-selector" id="upload_image">
        <input id="my-file-selector" type="file" style="display:none;">
        Upload Image Here
      </label>
    </div>

    <input type='submit' value='Post' class="btn btn-primary">
    </input>

	</form>

</div>

</body>
</html>