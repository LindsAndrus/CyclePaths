<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Item</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style type="text/css">
    #item_container{
      background: url("assets/images/bike.png");
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
  <?php $this->load->view('header') ?>

  <div id="item_container">
    <div id="item_info">
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

  </div>
</body>
</html>