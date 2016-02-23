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
    <div class="edit">
        <h3>Choose your Profile Picture!</h3>
        <?php if($this->session->flashdata('edit_errors')[0]) : ?>
            <div class="error"><?= $this->session->flashdata('edit_errors')[0]?></div>
        <?php endif?>
        <?php echo form_open_multipart('users/do_upload');?>

        <input type="file" name="userfile" />

        <br /><br />

        <input type="submit" value="upload" />

        </form>
    </div>
</div>

</body>
</html>
