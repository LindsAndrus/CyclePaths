<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
	<title>Seller Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/assets/css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
</head>
<body>

  <div class="header">
    <?php $this->load->view('header'); ?>
  </div>

<div class="container">
	<div class="user_info">
		<div class="portrait">
    		<img src="<?=$user['link']?>" width="150px" height "280px">
  		</div>
  		<?= $user['first_name'] ?>
  		<?= $user['last_name'] ?>
  		<?= $user['email'] ?>

        <a href="/users/change_profile_image">Change your Profile Image</a>
	</div>



  <div class="pastsales">
    <h3>Your past listings</h3>
    <ul class="nav nav-tabs" id="inactiveListingsTab">
        <?php foreach($user['inactive_listings'] as $listing) : ?>
            <li><a data-target="#<?=$listing['id']?>"><?=$listing['name']?></a></li>
        <?php endforeach ?>
    </ul>
      <div class="tab-content">
        <?php foreach($user['inactive_listings'] as $listing) : ?>
            <div class="tab-pane" id="<?=$listing['id']?>"> We put content for <?=$listing['name']?> here!</div>
        <?php endforeach ?>
      </div>
  </div>

  <div class="currentsales">
      <h3>Your current listings</h3>
      <ul class="nav nav-tabs" id="activeListingsTab">
          <?php foreach($user['active_listings'] as $listing) : ?>
              <li><a data-target="#<?=$listing['id']?>"><?=$listing['name']?></a></li>
          <?php endforeach ?>
      </ul>
      <div class="tab-content">
          <?php foreach($user['active_listings'] as $listing) : ?>
              <div class="tab-pane" id="<?=$listing['id']?>"> We put content for <?=$listing['name']?> here!</div>
          <?php endforeach ?>
      </div>
  </div>
</div>

</body>
</html>
