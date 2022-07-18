<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
		body{
			background: lightblue;
		}
	</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2><center>Login Page</h2></center>
					<form action="validation.php" method="POST">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</form>
				</div>
				<!-- <div class="col-lg-6">
					<h2><center>Signup Page</h2></center>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</form>
				</div> -->
			</div>
		</div>
			
	</body>
</html>
