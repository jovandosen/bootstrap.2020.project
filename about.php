<!doctype html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php
			$about = '';
			if(isset($_GET['about'])){
				$about = $_GET['about'];
			}
		?>

		<!--NAVIGATION-->
		<?php include('header.php'); ?>

		<div id="box-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<h1>Example text</h1>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						<button type="button" class="btn btn-primary btn-lg" id="example-button">Example</button>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<h1>Testing</h1>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<img src="images/img_forest.jpg" class="img-fluid float-right img-thumbnail">
					</div>
				</div>
			</div>
			<hr>
		</div>

		<div id="second-box-wrapper">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-12">
						<h1>Learn stuff</h1>
						<hr id="learn-stuff-hr">
					</div>
					<div class="col-12" id="text-wrap">
						<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="col-12">
						<a href="#">Learn more</a>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap-elements">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-lg-3">
						<div class="card special">
	  						<img src="images/site.jpg" class="card-img-top" alt="foo">
	  						<div class="card-body">
	    						<h5 class="card-title">Card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    						<a href="#" class="btn btn-primary">Go somewhere</a>
	  						</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card special">
	  						<img src="images/img_forest.jpg" class="card-img-top" alt="foo">
	  						<div class="card-body">
	    						<h5 class="card-title">Card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    						<a href="#" class="btn btn-primary">Go somewhere</a>
	  						</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card special">
	  						<img src="images/site.jpg" class="card-img-top" alt="foo">
	  						<div class="card-body">
	    						<h5 class="card-title">Card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    						<a href="#" class="btn btn-primary">Go somewhere</a>
	  						</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="card special">
	  						<img src="images/img_forest.jpg" class="card-img-top" alt="foo">
	  						<div class="card-body">
	    						<h5 class="card-title">Card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    						<a href="#" class="btn btn-primary">Go somewhere</a>
	  						</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>

		<div class="wrap-elements">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 add-padding">
						
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  						<div class="carousel-inner">
	    						<div class="carousel-item active">
	      							<img src="images/image_test.jpg" class="d-block w-100" alt="foo" width="100%" height="400px">
	    						</div>
	    						<div class="carousel-item">
	      							<img src="images/test.jpg" class="d-block w-100" alt="bar" width="100%" height="400px">
	    						</div>
	    						<div class="carousel-item">
	      							<img src="images/site.jpg" class="d-block w-100" alt="baz" width="100%" height="400px">
	    						</div>
	  						</div>
						  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Previous</span>
						  	</a>
	  						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    						<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Next</span>
	  						</a>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<h3>Example title text</h3>
						<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						<br>
						<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
				</div>
			</div>
			<hr>
		</div>

		<!--Footer-->
		<?php include('footer.php'); ?>
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>