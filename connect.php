<!doctype html>
<html lang="en">
	<head>
		<title>Connect</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php
			$connect = '';
			if(isset($_GET['connect'])){
				$connect = $_GET['connect'];
			} else {
				$connect = 'active';
			}
		?>
		
		<!--NAVIGATION-->
		<?php include('header.php'); ?>

		<div class="form-elements-container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 move-box">
						<h3>REGISTER</h3>
						<hr class="form-heading-hr">
						<form>
							<div class="form-group">
								<label for="first-name" class="form-el-style">First Name</label>
								<input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name...">
								<small class="form-text text-muted" id="first-name-help">Enter First Name.</small>
							</div>
							<div class="form-group">
								<label for="last-name" class="form-el-style">Last Name</label>
								<input type="text" name="last-name" class="form-control" id="last-name" placeholder="Last Name...">
								<small class="form-text text-muted" id="last-name-help">Enter Last Name.</small>
							</div>
							<div class="form-group">
								<label for="email" class="form-el-style">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email address...">
								<small class="form-text text-muted" id="email-help">Enter email address.</small>
							</div>
							<div class="form-group">
								<label for="password" class="form-el-style">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password...">
								<small class="form-text text-muted">Enter Password, atleast 6 characters, use letters and numbers.</small>
							</div>
							<div class="form-group">
								<span class="form-el-style">Gender</span>
								<div class="form-check add-margin-for-span">
									<input type="radio" name="gender" value="male" id="male" class="form-check-input" checked>
									<label for="male" class="form-check-label">Male</label>
								</div>
								<div class="form-check">
									<input type="radio" name="gender" value="female" id="female" class="form-check-input">
									<label for="female" class="form-check-label">Female</label>
								</div>
							</div>
							<button type="button" class="btn btn-primary">REGISTER</button>
						</form>
					</div>
					<div class="col-md-4 move-box">
						<h3>LOGIN</h3>
						<hr class="form-heading-hr">
						<form>
							<div class="form-group">
								<label for="email" class="form-el-style">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email address...">
								<small class="form-text text-muted" id="email-help">Enter email address.</small>
							</div>
							<div class="form-group">
								<label for="password" class="form-el-style">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password...">
								<small class="form-text text-muted">Enter Password, atleast 6 characters, use letters and numbers.</small>
							</div>
							<div class="form-group">
								<div class="form-check">
									<input type="checkbox" name="remember" id="remember" class="form-check-input" checked>
									<label for="remember" class="form-check-label">Remember me</label>
								</div>
							</div>
							<button type="button" class="btn btn-primary">LOGIN</button>
						</form>
					</div>
					<div class="col-md-4">
						<h3>CONTACT</h3>
						<hr class="form-heading-hr">
						<form>
							<div class="form-group">
								<label for="name" class="form-el-style">Name</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Name...">
								<small class="form-text text-muted">Enter your name.</small>
							</div>
							<div class="form-group">
								<label for="email" class="form-el-style">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email address...">
								<small class="form-text text-muted" id="email-help">Enter email address.</small>
							</div>
							<div class="form-group">
								<label for="message" class="form-el-style">Message</label>
								<textarea name="message" id="message" class="form-control">Your message...</textarea>
								<small class="form-text text-muted" id="message-help">Enter your contact message.</small>
							</div>
							<div class="form-group">
								<label for="file" class="form-el-style">Upload file</label>
								<input type="file" name="file" id="file" class="form-control-file">
							</div>
							<button type="button" class="btn btn-primary">CONTACT</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>