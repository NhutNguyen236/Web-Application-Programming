<!--Form documentation: https://getbootstrap.com/docs/4.0/components/forms/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<video autoplay muted loop id="myVideo">
  <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
</video>

<style>
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
		z-index: -1;
    }
</style>

<body>

<?php
	$user = 'root';
	$pass = '';
	$dbname = 'simple-connecy';

	$dbname = new mysqli('localhost', $user, $pass, $dbname) or die("Lost connection");

	echo "<div class = \"alert alert-success\">Connected</div>";
?>

<div class="container fluid border-primary justify-content-center">
	<div class = "row justify-content-center my-3">
		<h1>Register Demo</h1>
	</div>
    <form class = "border-danger card p-4 bg-light col-md-6 mx-auto bg-secondary opct opacity-60">
		<div class="form-row">
			<div class="form-group col-md-6">
			<label for="first-name">First name</label>
			<input type="text" class="form-control" id="first-name" placeholder="First name">

			</div>
			
			<div class="form-group col-md-6">	  
			<label for="last-name">Last name</label>
			<input type="text" class="form-control" id="last-name" placeholder="Last name">	
			</div>
			
		</div>
		
		<div class="form-group">
			<label for="user-name">Username</label>
			<input type="text" class="form-control" id="user-name" placeholder="username123">
		</div>
		
		<div class="form-group">
			<label for="pwd">Password</label>
			<input type="password" class="form-control" id="pwd" placeholder="Password">
		</div>
		
		<div class = "form-row text-center d-flex justify-content-center">
			<button type="submit" class="btn btn-primary">Sign in</button>
			<button type="reset" class="btn btn-primary ml-4">Reset</button>
		</div>
	</form>

</div>


</body>
</html>