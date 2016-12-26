<?php session_start();
if(isset($_POST['submit'])){
	$loginval=1;

	if(empty($_POST['email']) || empty($_POST['pw']) ){
		//echo "you left something blank";
	} else{
		$email = $_POST['email'];
		$pw = $_POST['pw'];

		$connection = mysqli_connect("localhost","root","","share");

		$query = "SELECT * FROM reg WHERE password='$pw' AND email='$email'";
		$logincheck = mysqli_query($connection, $query);
		$row = mysqli_num_rows($logincheck);
		
		echo $row;

		//echo "<br>";

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
				//echo "<a href=\"Organizations.php\">proceed to profile</a>";
				header('location:donate.php');


			}

	   } else{
			//echo "try again";
		}
		mysqli_close($connection);
		}
	}
?>