<?php session_start();
	$loginval=0;

			//$supplies = $_POST['supplies'];
			//$address = $_POST['address'];
			//$street = $_POST['street'];
			//$city = $_POST['city'];
			//$zipcode = $_POST['zipcode'];
			$uid = $_SESSION["uid"];
			$username = $_SESSION["username"];
			$email = $_SESSION["email"];
			$password = $_SESSION["password"];
			$tel = $_SESSION["tel"];
			$denom = $_POST['denom'];
			$organization = $_POST['organization'];
			echo "$uid<br>";
			echo "$username<br>";
			echo "$email<br>";
			echo "$password<br>";
			echo "$tel<br>";
			echo "$denom<br>";
			echo "$organization<br>";

			$connection = mysqli_connect("localhost","root","","share");

			//$query = "INSERT INTO transaction( tid, uid, username, email, password, tel, supplies, address, street, city, zipcode, denom, date, strtime, endtime ) VALUES ( NULL, '$uid','$username', '$email', '$password', '$tel', NULL, NULL, NULL, NULL, NULL, '$denom', NULL, NULL, NULL);";

			 if (!$connection ){
			 
			 	echo $connection->error;
			 }

			 else {
			 	echo "in";
			 	$query = "INSERT INTO transaction(tid, uid, username, email, password, tel, supplies ) VALUES ( NULL,'$uid', '$username', '$email','$password', '$tel', '$supplies');";

			    mysqli_query($connection,$query);
			 	

			 }
			
			mysqli_query($connection, $query);

?>