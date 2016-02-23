<style type="text/css">
	.logo{
		display: inline-block;
		margin-right: 300px;
	}

	.links{
		display: inline-block;
	}
	.container{
		margin-top: 10px;
		width: 900px;
	}
</style>

<div class="container">
	<div class="logo">
		<img src="/assets/images/logo.png" height="60px" width="250px"></img>
	</div>
	<div class="links">
		<?php if($this->session->userdata('user_id')) : ?>
			<a href="/logout">LOGOUT</a>
		 <?php else : ?>
		 	<a href="/login">LOGIN/REGISTRATION</a>
		 <?php endif ?>
		<a href="">ABOUT</a>
		<a href="">CONTACT US</a>
	</div>
</div>