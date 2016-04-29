<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('kickstart');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery');
		echo $this->Html->script('kickstart');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div id="container" class="grid">
	<header>
		<div id="title" class="col_6 column">
			<h1><a href="<?php echo $this->webroot; ?>"><strong>Real Estate</strong> Project</a></h1>
		</div>
		<div class="col_6 column right">
			<form id="add_property" action="<?php $this->webroot; ?>properties/add">
				<button class="large green"><i class="icon-plus"></i>Add Property</button>
			</form>
		
		
		</div>
	</header>
	
	<div class="col_12 column">
	<!-- Menu Horizontal -->
		<ul class="menu">
		<li <?php echo ($this->here == '/real_estate' || $this->here == '/real_estate/properties')? 'class="current"' : ''?>><a href="<?php echo $this->webroot; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		<li <?php echo ($this->here == '/real_estate/users/register')? 'class="current"' : ''?>><a href="<?php echo $this->webroot; ?>users/register"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
		<li <?php echo ($this->here == '/real_estate/users/login')? 'class="current"' : ''?>><a href="<?php echo $this->webroot; ?>users/login"><i class="fa fa-key" aria-hidden="true"></i> Login</a></li>
		</ul>
	</div>
	
	
	
	<div class="col_12 column">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	
	<div class="clearfix"></div>
	<footer>
		<p> Team 1, 2016, CMPE 138, San Jose State University </p>
	</footer>
</div> <!-- End Grid -->
</body>
</html>
