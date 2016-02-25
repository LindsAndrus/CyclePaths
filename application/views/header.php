<div class="masthead">
	<div class="logo">
		<img src="/assets/images/cyclepathlogo.png"></img>
	</div>
	<ul class="nav nav-pills nav-justified">
		<li><a href="/home">HOME</a></li>
    	<?php if($this->session->userdata('user_id')) : ?>
    		<li><a href="/users/show/<?= $this->session->userdata('user_id')?>">SELLER DASHBOARD</a></li>
	 	<?php endif ?>
		<li><a href="/about">ABOUT</a></li>
		<li><a href="/contact">CONTACT US</a></li>
		<?php if($this->session->userdata('user_id')) : ?>
			<li><a href="/logout">LOGOUT</a></li>
		<?php else : ?>
	 		<li><a href="/login">LOGIN AND REGISTRATION</a></li>
		<?php endif ?>
	</ul>
</div>
