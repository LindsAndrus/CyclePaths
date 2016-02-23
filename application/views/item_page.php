<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create a Listing</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>     
<body>  
  <?php $this->load->view('header.php') ?>

<h1 class="page-header">CyclePath</h1>

  <div class="row">
    <div class="col-md-5">

    </div>
</div>

<div>
  <?php foreach ($ind_item as $results) {?>
    <p>THIS IS THE IMAGE</p>
    <h2><?= $results['name'] ?></h2>
    <p>
      <?= $results['brand_name'] ?><br>
      <?= $results['description'] ?><br>
      <?= $results['price'] ?><br>
      <?= $results['category'] ?><br>
      <a href="mailto:<?= $results['email'] ?>?Subject=Interested%20in%20listing" target="_top">Contact Seller</a>
    </p>
  <?php } ?>
</div>
</body>
</html>