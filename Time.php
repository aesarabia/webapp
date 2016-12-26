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
		<title>Time donation</title>
	</head>
	<body>
	<?php require_once "nav.php"; ?>

	<form method="POST" action="registration.php">
			<div class="container">
				<div class="row main">
					<div class="panel-heading">
		               <div class="panel-title text-center">
		               		<h1 class="title">Share+</h1>
		               		<h2>Thank you for your Support</h2>
		               		<hr/>
		               	</div>
		            </div> 





<div class="col-md-8">
<div class="org"> 
<input type="radio" name="organization" value="Saint Jude" ><br>
		<img src="images/org/jude.png">
		<h3>Saint Jude</h3>
  		<p>Description</p>
</div>


<div class="org"> 
<input type="radio" name="organization" value="March Of Dimes" ><br>
		<img src="images/org/marchdime.png">
		<h3>March of Dimes</h3>
  		<p>Description</p>
</div>

<div class="org"> 
<input type="radio" name="organization" value="Human Rights" ><br>
		<img src="images/org/Humanrights.png">
		<h3>Humans Rights</h3>
  		<p>Description</p>
</div>
</div>
<div class="col-md-4">







			<div class="main-login main-center">

				<form class="form-horizontal" method="post" action="time.php">
							
			<div class="form-group">
				
			<div id="time">
			<form id="timeform" action="">

			<form class="active">

				<fieldset class="account_Time">
					<label> Date 
						<input type="date" name="day">
					</label>
					<label> Start Time: 
						<input type="time" name="str_time">
					</label>
					<label> End Time: 
						<input type="time" name="end_time">
					</label><br>
					<input type="submit">
			</form>
			
</body>
</html>


	