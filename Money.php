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

		<title>Money Donation</title>
	</head>
	<body>
	<?php require_once "nav.php"; ?>

			<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Share+</h1>
	               		Thank you for your Support
	               		<hr/>
	               	</div>
	            </div> 

			
<form class="form-horizontal" method="post" action="donateprocess.php">
	<div class="container">
		<div class="row main">
		<h2>Select the organization that you like to support</h2><br>
<br><br>
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
				<h3> Denomination</h3>		
				<div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="number" name="denom" class="form-control" aria-label="Custom amount" value="0.00" min="10" required="">
                 </div>
				<div>
					<input type="submit" name="submit" value="Submit">
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
			<!--<script type="text/javascript">
				$(function() {
				  $('form').submit(function(){
				    $.post('index.php/upload', function() {
				      window.location = 'index.php';
				    });
				    return false;
				  });
				});
			</script>-->

			</div>
			</div>
			</div>
			</div>
			</form>
			</body>
			</html>


	
