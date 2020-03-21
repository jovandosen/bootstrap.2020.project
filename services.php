<!doctype html>
<html lang="en">
	<head>
		<title>Services</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php
			$services = '';
			if(isset($_GET['services'])){
				$services = $_GET['services'];
			}
		?>

		<!--NAVIGATION-->
		<?php include('header.php'); ?>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div id="carouselTest" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/image_test.jpg" class="" alt="image one" width="100%" height="400px">
								</div>
								<div class="carousel-item">
									<img src="images/img_forest.jpg" class="" alt="image two" width="100%" height="400px">
								</div>
								<div class="carousel-item">
									<img src="images/sample.jpg" class="" alt="image three" width="100%" height="400px">
								</div>
								<div class="carousel-item">
									<img src="images/site.jpg" class="" alt="image four" width="100%" height="400px">
								</div>
								<div class="carousel-item">
									<img src="images/test.jpg" class="" alt="image five" width="100%" height="400px">
								</div>
							</div>
							<a href="#carouselTest" class="carousel-control-prev" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a href="#carouselTest" class="carousel-control-next" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-warning make-smaller">Featured today</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div id="featuredToday" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/sample.jpg" class="" alt="image three" width="100%" height="300px">
								</div>
								<div class="carousel-item">
									<img src="images/site.jpg" class="" alt="image four" width="100%" height="300px">
								</div>
								<div class="carousel-item">
									<img src="images/test.jpg" class="" alt="image five" width="100%" height="300px">
								</div>
							</div>
							<a href="#featuredToday" class="carousel-control-prev" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a href="#featuredToday" class="carousel-control-next" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Test</h4>
						<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-warning make-smaller">What to watch</h1>
						<div id="heading-container">
							<h4>Fan favorites</h4>
						</div>
						<h5>This week's top TV and movies</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/site.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/img_forest.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/site.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/img_forest.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/site.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/img_forest.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-warning make-smaller">Watch free</h1>
						<div id="heading-container">
							<h4>Originals</h4>
						</div>
						<h5>Video coverage of trending news, celebrities, movies, TV shows, and streaming hits</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
						</div>
						<p>Description text to display for video</p>
					</div>
					<div class="col-md-4">
						<div class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
						</div>
						<p>Description text to display for video</p>
					</div>
					<div class="col-md-4">
						<div class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
						</div>
						<p>Description text to display for video</p>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-warning make-smaller">Explore what’s streaming</h1>
						<div id="example-title-box">
							<h4>Example title</h4>
						</div>
						<h5>Description subtitle</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/site.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/img_forest.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/site.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/img_forest.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/site.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2 add-card-padding">
						<div class="card">
							<img src="images/img_forest.jpg" class="card-img-top" alt="yee">
							<div class="card-body">
								<h5 class="card-title">Test</h5>
								<p class="card-text">Some quick example text.</p>
								<a href="#" class="btn btn-primary">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-warning make-smaller">Some Cool Stuff</h1>
						<div id="heading-container">
							<h4>Bootstrap test</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-md-4 add-card-padding">

						<div class="card flex-row flex-wrap">
					        <div class="card-header border-0">
					            <img src="images/site.jpg" alt="" width="100" height="200">
					        </div>
					        <div class="card-block px-2">
					            <h4 class="card-title">Title</h4>
					            <p class="card-text">Some quick example text.</p>
					            <p class="card-text">Some quick example text.</p>
					            <p class="card-text">Some quick example text.</p>
					        </div>
					        <div class="w-100"></div>
    					</div>

					</div>
					<div class="col-md-4 add-card-padding">

						<div class="card flex-row flex-wrap">
					        <div class="card-header border-0">
					            <img src="images/img_forest.jpg" alt="" width="100" height="200">
					        </div>
					        <div class="card-block px-2">
					            <h4 class="card-title">Title</h4>
					            <p class="card-text">Some quick example text.</p>
					            <p class="card-text">Some quick example text.</p>
					            <p class="card-text">Some quick example text.</p>
					        </div>
					        <div class="w-100"></div>
    					</div>

					</div>
					<div class="col-md-4 add-card-padding">

						<div class="card flex-row flex-wrap">
					        <div class="card-header border-0">
					            <img src="images/site.jpg" alt="" width="100" height="200">
					        </div>
					        <div class="card-block px-2">
					            <h4 class="card-title">Title</h4>
					            <p class="card-text">Some quick example text.</p>
					            <p class="card-text">Some quick example text.</p>
					            <p class="card-text">Some quick example text.</p>
					        </div>
					        <div class="w-100"></div>
    					</div>

					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-warning make-smaller">Show Stuff</h1>
						<div id="heading-container">
							<h4>Development</h4>
						</div>
						<h5>Description subtitle</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="services-carousel-container">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12 col-md-4 col-lg-2">
						<img src="images/site.jpg" alt="foo" class="img-fluid make-rounded">
						<p>John Doe</p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2">
						<img src="images/img_forest.jpg" alt="foo" class="img-fluid make-rounded">
						<p>Jane Doe</p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2">
						<img src="images/site.jpg" alt="foo" class="img-fluid make-rounded">
						<p>John Doe</p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2">
						<img src="images/img_forest.jpg" alt="foo" class="img-fluid make-rounded">
						<p>Jane Doe</p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2">
						<img src="images/site.jpg" alt="foo" class="img-fluid make-rounded">
						<p>John Doe</p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2">
						<img src="images/img_forest.jpg" alt="foo" class="img-fluid make-rounded">
						<p>Jane Doe</p>
					</div>
				</div>
			</div>
		</div>

		<!--Footer-->
		<?php include('footer.php'); ?>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>