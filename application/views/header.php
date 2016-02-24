<style type="text/css">
	.logo{
		display: inline-block;
		margin-right: 50px;
	}

	.links{
		display: inline-block;
	}
	.container{
		padding-top: 10px;
		margin: auto;
	}
</style>

<div class="container">

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="logo">
		<img src="/assets/images/logo.png" height="60px" width="250px"></img>
		</div>

	    	<?php if($this->session->userdata('user_id')) : ?>
				<a href="/logout">LOGOUT</a>
		 	<?php else : ?>
		 		<a href="/login">LOGIN/REGISTRATION</a>
		 	<?php endif ?>
			<a href="/about">ABOUT</a>
			<a href="/contact">CONTACT US</a>
	</nav>

</div>