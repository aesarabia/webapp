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

<h2>Transaction</h2>
<div class="form">
<form method="post" action="supplies.php">
<label>supplies
	<input type="supplies" name="supplies"  value="" required><br>
</label>
	<br>
<label>address
	<input type="address" name="address"  value="" required><br>
</label>
	<br>
<label>street
	<input type="street" name="street"  value="" required><br>
</label>
	<br>
<label>city
	<input type="city" name="city"  value="" required><br>
</label>
	<br>
<label>zipcode
	<input type="zipcode" name="zipcode"  value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">  
</form>
</div>
<?php 


if(isset($_POST['submit'])){
	$loginval=1;

	if(empty($_POST['supplies']) || empty($_POST['address']) empty($_POST['street']) || empty($_POST['city'])  ){
		echo "you left something blank";
	} else{
		$email = $_POST['email'];
		$pw = $_POST['pw'];

		$connection = mysqli_connect("localhost","root","","share");

		$query = "SELECT * FROM reg WHERE password='$pw' AND email='$email'";
		$logincheck = mysqli_query($connection, $query);
		$row = mysqli_num_rows($logincheck);
		echo $row;

		echo "<br>";

		if($row == 1){
			while ( $row = mysqli_fetch_assoc($logincheck)) {
				$_SESSION["uid"] = $row["uid"];
				//echo $_SESSION["uid"]. '<br>';

				$_SESSION["username"] = $row["username"];
				//echo $_SESSION["username"]. '<br>';

				$_SESSION["email"] = $row["email"];
				//echo $_SESSION["email"]. '<br>';

				$_SESSION["password"] = $row["password"];
				//echo $_SESSION["password"]. '<br>';

				$_SESSION["tel"] = $row["tel"];
				//echo $_SESSION["tel"]. '<br>';

				//echo "<a href=\"profile.php\">proceed to profile</a>";
				echo "<a href=\"Organizations.php\">proceed to profile</a>";
				header('location:/');


			}

	   } else{
			echo "try again";
		}
		mysqli_close($connection);
		}
	}
?>
</body>
</html>