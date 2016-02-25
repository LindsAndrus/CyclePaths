<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>Create a Listing</title>
</head> 


<body>  
<?php $this->load->view('header.php') ?>

<div class="container" id="main_container">
  <!-- <div class="row">
    <div class="col-md-5"> -->
  <div id="search_inputs">

	<h3>Create A Listing Here!</h3>

    <?php if($this->session->flashdata('errors')) : ?>
      <div class="error">
        <?php foreach($this->session->flashdata('errors') as $error) : ?>
          <?= $error ?>
        <?php endforeach ?>
      </div>
    <?php endif?>

    <?php echo form_open_multipart('listings/create_item');?>
    
    <div>
      Name: <input type='text' name='name' class="form-control">
    </div>

    <div id="create_category">
      Part Category: <br>
      <form role="form">
        <label class="radio-inline">
          <input type="radio" name="optradio">Wheels
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio">Brakes
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio">Shifters/Derailleurs
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio">Handbars/Grips
        </label><br>
        <label class="radio-inline">
          <input type="radio" name="optradio">Pedals/Cleats
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio">Cranksets/Chainrings/Chainsets
        </label><br>
        <label class="radio-inline">
          <input type="radio" name="optradio">Chains/Cassettes
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio">Saddles/Seats/Seatposts
        </label>
      </form>
    </div>

     <!--  Category: <select type='select' name='category' class="form-control">
        <option value="wheels">Wheels</option>
        <option value="brakes">Brakes</option>
        <option value="shifters/derailleurs">Shifters/Derailleurs</option>
        <option value="handbars/grips">Handbars/Grips</option>
        <option value="pedals/cleats">Pedals/Cleats</option>
        <option value="cranksets/chainrings/chainsets">Cranksets/Chainrings/Chainsets</option>
        <option value="chains/cassettes">Chains/Cassettes</option>
        <option value="saddles/seats/seatposts">Saddles/Seats/Seatposts</option>
      </select>      
    </div> -->
   
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
      Description: <input type='text' name='description' class="form-control">
    </div>

    <div>
      Price: <input type='number' name='price' step="0.01" class="form-control">
    </div>
    
    <div>
      <input type="file" name="userfile"/>
    </div>

    <input type='submit' value='Post' class="btn btn-primary" id="create_submit">
    </input>

	</form>
  </div>
</div>

</body>
</html>