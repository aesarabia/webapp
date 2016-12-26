<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Share_Profile</title>
	<link rel="stylesheet" href="style.css">
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
	<style>
		*{
			font-family: sans-serif;
		}
	</style>
</head>
<body>
<?php require_once "nav.php"; ?>

<h2>Login</h2>
<p>Your ID is: <?php echo $_SESSION["uid"]; ?>  </p>
<p>Your USERNAME is: <?php echo $_SESSION["username"]; ?> </p>
<p>Your PASSWORD is: <?php echo $_SESSION["password"]; ?> </p>
<p>Your EMAIL is: <?php echo $_SESSION["email"]; ?> </p>
<p>Your TEL is: <?php echo $_SESSION["tel"]; ?>  </p>
	
<p><a href="logout.php">logout</a></p>


</body>

</html>
