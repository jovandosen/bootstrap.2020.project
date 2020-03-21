<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a href="#" class="navbar-brand">
		<img src="images/image_test.jpg" width="50" height="50">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item <?php echo (isset($index)) ? $index : '' ?>">
				<a href="index.php?index=active" class="nav-link">Home</a>
			</li>
			<li class="nav-item <?php echo (isset($about)) ? $about : '' ?>">
				<a href="about.php?about=active" class="nav-link">About</a>
			</li>
			<li class="nav-item <?php echo (isset($services)) ? $services : '' ?>">
				<a href="services.php?services=active" class="nav-link">Services</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Team</a>
			</li>
			<li class="nav-item <?php echo (isset($connect)) ? $connect : '' ?>">
				<a href="connect.php?connect=active" class="nav-link">Connect</a>
			</li>
		</ul>
	</div>
</div>
</nav>