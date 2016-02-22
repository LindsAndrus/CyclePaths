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
<ul class="nav nav-tabs">
<li role="presentation"><a href="#">HOME</a></li>
  <li role="presentation" class="active"><a href="#">CREATE A LISTING</a></li>
  <li role="presentation"><a href="#">LOGOUT</a></li>
  <li role="presentation"><a href="#">ABOUT US</a></li>
  <li role="presentation"><a href="#">CONTACT US</a></li>
</ul>

<h1 class="page-header">CyclePath</h1>


  <div class="row">
    <div class="col-md-5">
  	<h3>Create A Listing Here!</h3>

  <form action='/users/create' method='post' class="well">
    
    <div>
      Name: <input type='text' name='name' class="form-control"></input>      
    </div>
    <div>
      Category: <input type='text' name='alias' class="form-control"></input>      
    </div>
   
    <div>
      Brand: <input type='email' name='email' class="form-control"></input>      
    </div>
    <div>
      Price: <input type='password' name='password' class="form-control"></input>      
    </div>
    
     <div>
    <label class="btn btn-success .btn-xs" for="my-file-selector">
    <input id="my-file-selector" type="file" style="display:none;">
    Upload Image Here
</label>
    </div>

    <input type='submit' value='Post' class="btn btn-primary"></input>

	</form>

  </form>
</div>

    </div>
  </div>
</body>
</html>