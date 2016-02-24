<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create a Listing</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style type="text/css">
    #listings_container{
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

<?php $this->load->view('header') ?>

  <div id="listings_container">
    <h2>Your Search Results!</h2>
    <h4>Your Search returned <?= count($cat_results) ?> results!</h4>

    <form>
      <th>Image</th>
      <th>Item</th>
      <th>Description</th>
      <th>Price</th>
      <th>Brand</th>
      <th>Seller</th>
      <?php foreach ($cat_results as $list_item) {?>
        <tr>
          <td><a href="/item_page/<?= $list_item['id'] ?>">image</a></td>
    		  <td><?= $list_item['name'] ?></td>
          <td><?= $list_item['description'] ?></td>
          <td><?= $list_item['price'] ?></td>
          <td><?= $list_item['brand_name'] ?></td>
          <td><?= $list_item['email'] ?></td>  
        </tr>
      <?php } ?>
    </form>

  </div>

</body>
</html>