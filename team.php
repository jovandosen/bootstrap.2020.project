<!doctype html>
<html lang="en">
	<head>
		<title>Team</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php
			$team = '';
			if(isset($_GET['team'])){
				$team = $_GET['team'];
			} else {
				$team = 'active';
			}
		?>

		<!--NAVIGATION-->
		<?php include('header.php'); ?>

		<div class="some-container-box">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="team-image-container">
							<img src="images/sample.jpg" class="img-fluid img-thumbnail">
							<div class="team-text-container">
								<p>Some text to display</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-12 add-extra-margin text-smaller">
								<img src="images/site.jpg" class="img-fluid img-thumbnail" width="100px" height="100px">
								<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
							</div>
							<div class="col-12 text-smaller">
								<img src="images/test.jpg" class="img-fluid img-thumbnail" width="100px" height="100px">
								<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
							</div>
							<div class="col-12 text-smaller">
								<img src="images/site.jpg" class="img-fluid img-thumbnail" width="100px" height="100px">
								<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
							</div>
							<div class="col-12 text-smaller">
								<img src="images/test.jpg" class="img-fluid img-thumbnail" width="100px" height="100px">
								<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="some-container-box">
			<div class="container">
				<div class="row">
					<div class="col-md-4 margin-bottom-data">						
						<div class="card bg-dark text-white">
					  		<img src="images/img_forest.jpg" class="card-img" alt="test1">
					  		<div class="card-img-overlay">
					    		<h5 class="card-title">Card title</h5>
				    			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    		<p class="card-text">Last updated 3 mins ago</p>
					  		</div>
						</div>
					</div>
					<div class="col-md-4 margin-bottom-data">
						<div class="card bg-dark text-white">
					  		<img src="images/img_forest.jpg" class="card-img" alt="test2">
					  		<div class="card-img-overlay">
					    		<h5 class="card-title">Card title</h5>
				    			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    		<p class="card-text">Last updated 3 mins ago</p>
					  		</div>
						</div>
					</div>
					<div class="col-md-4 margin-bottom-data">
						<div class="card bg-dark text-white">
					  		<img src="images/img_forest.jpg" class="card-img" alt="test3">
					  		<div class="card-img-overlay">
					    		<h5 class="card-title">Card title</h5>
				    			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    		<p class="card-text">Last updated 3 mins ago</p>
					  		</div>
						</div>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="some-container-box">
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<div class="row">
							<div class="col-12 link-margin-data">
								<a href="#">This is some link text to be displayed This is some link text to be displayed</a>
								<hr>
							</div>
							<div class="col-12 link-margin-data">
								<a href="#">This is some link text to be displayed This is some link text to be displayed</a>
								<hr>
							</div>
							<div class="col-12 link-margin-data">
								<a href="#">This is some link text to be displayed This is some link text to be displayed</a>
								<hr>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-12 link-margin-data">
								<a href="#">This is some link text to be displayed This is some link text to be displayed</a>
								<hr>
							</div>
							<div class="col-12 link-margin-data">
								<a href="#">This is some link text to be displayed This is some link text to be displayed</a>
								<hr>
							</div>
							<div class="col-12 link-margin-data">
								<a href="#">This is some link text to be displayed This is some link text to be displayed</a>
								<hr>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header">
								<b>Development</b>
							</div>
							<div class="card-body">
								<ul class="list-group" id="links-wrapper">
									<li><a href="#">This is some link text to be displayed</a></li>
									<li><a href="#">This is some link text to be displayed</a></li>
									<li><a href="#">This is some link text to be displayed</a></li>
									<li><a href="#">This is some link text to be displayed</a></li>
									<li><a href="#">This is some link text to be displayed</a></li>
								</ul>
							</div>
							<div class="card-footer text-right">
								Footer text
							</div>
						</div>
					</div>

				</div>
				<hr>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>