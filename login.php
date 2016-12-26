<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
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


	 <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="style.css">
	<style>
		*{
			font-family: sans-serif;
		}
		
	</style>
</head>
<body>
<?php require_once "nav.php"; ?>

<h2>Login</h2>
<div class="form">
<form method="post" action="logincheck.php">
<label>E-mail
	<input type="email" name="email"  value="" required><br>
</label>
	<br>
<label>Password
	<input type="password" name="pw"  value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">  
</form>
</div>

</body>
</html>