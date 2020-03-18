<!doctype html>
<html lang="en">
	<head>
		<title>Bootstrap 2020 Project</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<!--NAVIGATION-->

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
					<li class="nav-item active">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Services</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Team</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Connect</a>
					</li>
				</ul>
			</div>
		</div>
		</nav>

		<!--Image Slider-->

		<div id="slides" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#slides" data-slide-to="0" class="active"></li>
				<li data-target="#slides" data-slide-to="1"></li>
				<li data-target="#slides" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/sample.jpg" width="100%" height="500px">
					<div class="carousel-caption">
						<h1 class="display-2">Bootstrap</h1>
						<h3>Description text</h3>
						<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
						<button type="button" class="btn btn-primary btn-lg">Get Started</button>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/site.jpg" width="100%" height="500px">
					<div class="carousel-caption">
						<h1 class="display-2">Bootstrap</h1>
						<h3>Description text</h3>
						<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
						<button type="button" class="btn btn-primary btn-lg">Get Started</button>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/test.jpg" width="100%" height="500px">
					<div class="carousel-caption">
						<h1 class="display-2">Bootstrap</h1>
						<h3>Description text</h3>
						<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
						<button type="button" class="btn btn-primary btn-lg">Get Started</button>
					</div>
				</div>
			</div>
		</div>

		<!--Jumbotron-->

		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
					<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
					<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
				</div>
			</div>
		</div>

		<!--Welcome Section-->

		<div class="container-fluid">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4">Built with ease.</h1>
				</div>
				<hr>
				<div class="col-12">
					<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				</div>
			</div>
		</div>

		<!--Three Column Section-->

		<div class="container-fluid padding">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-dragon"></i>
					<h3>HTML5</h3>
					<p>Description text for HTML5.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-dragon"></i>
					<h3>BOOTSTRAP</h3>
					<p>Description text for BOOTSTRAP.</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<i class="fas fa-dragon"></i>
					<h3>CSS3</h3>
					<p>Description text for CSS3.</p>
				</div>
			</div>
			<hr class="my-4">
		</div>

		<!--Two Column Section-->

		<div class="container-fluid padding">
			<div class="row padding">
				<div class="col-lg-6">
					<h2>If you build it...</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					<br>
					<a href="#" id="learn-more" class="btn btn-primary">Learn More</a>
				</div>
				<div class="col-lg-6">
					<img src="images/site.jpg" class="img-fluid">
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>