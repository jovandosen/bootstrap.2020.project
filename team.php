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

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>