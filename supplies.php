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
		<link rel="stylesheet" type="text/css" href="css/donat.css">

		<title>Supplies</title>
	</head>
	<body>
	<?php require_once "nav.php"; ?>
		<h1>Thanks you for Support and donations</h1>
	<form method="POST" action="supplies.php">
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Share+</h1>
	               		Thank you for your Support
	               		<hr/>
	               	</div>
	            </div> 
		<div class="main-login main-center">
			<form class="form-horizontal" method="post" action="Mdonation.html">
				<div class="form-group">	
					<label for="name" class="cols-sm-2 control-label">Describe items for donation</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-window-restore" aria-hidden="true"></i></span>
						<textarea placeholder="Enter supplies to donate here..." rows="5" cols="32" name="comment" id="supplies"> 
						</textarea>	
				  		
				  	</div><br>
					<label for="name" class="cols-sm-2 control-label">Supplies location</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Address"/>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Street"/>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter City"/>
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Zipcode"/>
						</div><br>
						</div><br>
						<div>
							<input type="submit" name="submit" value="Submit">
						</div>
				</div>
				</div>
			</form>




	<?php 
	$loginval=0;

	if(isset($_POST['submit'])){
		if(empty($_POST['supplies']) || empty($_POST['address']) empty($_POST['street']) || empty($_POST['city']) | empty($_POST['zipcode']) ){
			echo "you left something blank";
		} else {
			$supplies = $_POST['supplies'];
			$address = $_POST['address'];
			$street = $_POST['street'];
			$city = $_POST['city'];
			$zipcode = $_POST['zipcode'];

			$connection = mysqli_connect("localhost","root","","transaction");

			$query = "INSERT INTO reg ( tid, uid , username, email, password, tel, supplies, address, street, city, zipcode, denom, date, strtime, endtime ) VALUES ( NULL, '$username', '$email', '$pw', '$tel');";
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


			</div>
			</div>
			</div>
			</body>
			</html>
