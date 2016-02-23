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

<h3>Your Search returned <?= count($cat_results) ?>!</h3>
<!-- 
  <div class="row">
    <div class="col-md-5"> -->
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
<!-- </div> -->

</body>
</html>