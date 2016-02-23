<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
	<title>Seller Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#home">(Item name</a></li>
      <li><a data-toggle="pill" href="#menu1">(Item name 2)</a></li>
      <li><a data-toggle="pill" href="#menu2">(Item name 3)</a></li>
      <li><a data-toggle="pill" href="#menu3">(Item name 4)</a></li>
    </ul>
  
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h5>(Item name)</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h5>(Item name 2)</h5>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h5>(Item name 3)</h5>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="menu3" class="tab-pane fade">
        <h5>(Item name 4)</h5>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div>
  </div>


  <div class="activesales">
    <h3>Your active listings</h3>
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#home">(Item name</a></li>
      <li><a data-toggle="pill" href="#menu1">(Item name 2)</a></li>
      <li><a data-toggle="pill" href="#menu2">(Item name 3)</a></li>
      <li><a data-toggle="pill" href="#menu3">(Item name 4)</a></li>
    </ul>

    <div>
    <table>
        <?php foreach ($past_item as $item) { ?>
        <tr>
          <td><?= $item['name'] ?></td>
          <td><?= $item['price'] ?></td>
          <td><?= $item['created_on'] ?></td>
        </tr>
        <?php }?>
    </table>
  </div>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h5>(Item name)</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h5>(Item name 2)</h5>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h5>(Item name 3)</h5>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="menu3" class="tab-pane fade">
        <h5>(Item name 4)</h5>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
