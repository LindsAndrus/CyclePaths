<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
	<title>Seller Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#inactiveListingsTab a:first').tab('show');
          $('#activeListingsTab a:first').tab('show');
      });
      $(function(){
          $('.nav-tabs a').on('click', function (e) {
              e.preventDefault();
              $(this).tab('show');
          });
      });
  </script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/custom.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <style type="text/css">
    .container{
      background: url("/assets/images/bike.png");
      background-repeat:no-repeat;
      -webkit-background-size:cover;
      -moz-background-size:cover;
      -o-background-size:cover;
      background-size:cover;
      background-position:center;
    }
  </style>
</head>
<body>
  <div class="header">
    <?php $this->load->view('header'); ?>
  </div>

  <div class="container">
	<div class="user_info">
  		<img src="<?=$user['link']?>" width="150px" height "280px"><br>
  		<?= $user['first_name'] ?>
  		<?= $user['last_name'] ?>
  		<?= $user['email'] ?><br>
      <a href="/users/edit/<?=$user['user_id']?>">Edit Profile Info</a>
      <div>
        <form action="/create_item" method="post">
          <input type="submit" value="Create New Listing">
        </form>
      </div>

	</div>
  <div class="currentsales">
      <h3>Your active listings</h3>
      <ul class="nav nav-tabs" id="activeListingsTab">
          <?php foreach($user['active_listings'] as $listing) : ?>
              <li><a data-target="#<?=$listing['id']?>"><?=$listing['name']?></a></li>
          <?php endforeach ?>
      </ul>
      <div class="tab-content listing">
          <?php foreach($user['active_listings'] as $listing) : ?>
              <div class="tab-pane" id="<?=$listing['id']?>"> 
                <img src="<?=$listing['link']?>" width="15%" height "15%"><br>
                <p><b>Item Name: </b><?=$listing['name']?><br> 
                <b>Description: </b><?=$listing['description']?><br>
                <b>Listed Price: </b><?=$listing['price']?></p>
              </div>
          <?php endforeach ?>
      </div>
  </div>

  <div class="pastsales">
    <h3>Your past listings</h3>
    <ul class="nav nav-tabs" id="inactiveListingsTab">
        <?php foreach($user['inactive_listings'] as $listing) : ?>
            <li><a data-target="#<?=$listing['id']?>"><?=$listing['name']?></a></li>
        <?php endforeach ?>
    </ul>
      <div class="tab-content listing">
        <?php foreach($user['inactive_listings'] as $listing) : ?>
            <div class="tab-pane" id="<?=$listing['id']?>"> 
              <img src="<?=$listing['link']?>" width="15%" height "15%"><br>
              <p><b>Item Name: </b><?=$listing['name']?><br>
              <b>Description: </b><?=$listing['description']?><br>
              <b>Listed Price: </b><?=$listing['price']?></p>
            </div>
        <?php endforeach ?>
      </div>
  </div>
</div>
</body>
</html>