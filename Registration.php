<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/mainreg.css">
		<title>Registration</title>
	</head>
	<body>
	<?php require_once "nav.php"; ?>
	<form method="POST" action="Registration.php">
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Share+</h1>
	               		<h2>Registration</h2>
	               		<hr/>
	               	</div>
	            </div> 
		<div class="main-login main-center">
			<form class="form-horizontal" method="post" action="Registration.php">
						
				<div class="form-group">
					<label for="name" class="cols-sm-2 control-label">Name</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">Email</label>
					<div class="cols-sm-10">

						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="username" class="cols-sm-2 control-label">Username</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-10">
				<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
						</div>
						<div class="form-group">
					<label for="tel" class="cols-sm-2 control-label">tel</label>
				<div class="cols-sm-10">
				<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="tel" id="tel"  placeholder="Enter your Telephone"/>
						</div>

						<div>
							<input type="submit" name="submit" value="Submit">
						</div>
				</div>
				</div>
			</form>
<?php 
	$loginval=0;

	if(isset($_POST['submit'])){
		if(empty($_POST['email']) || empty($_POST['password']) ){
			echo "you left something blank";
		} else {
			$email = $_POST['email'];
			$pw = $_POST['password'];
			$username = $_POST['username'];
			$tel = $_POST['tel'];

			$connection = mysqli_connect("localhost","root","","share");

			$query = "INSERT INTO reg ( uid, username , email, password, tel) VALUES ( NULL, '$username', '$email', '$pw', '$tel');";
			 if (!$connection ){
			 	echo "no connection";
			 }

			 else {
			 	echo "in";
			 	echo $connection->error;

			 }

			
			mysqli_query($connection, $query);
		}
	}
?>
	</body>
</html>		