<!DOCTYPE html>
<html lang="en">
<head>
  <title>Share+</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
      body{
        background-color: #D7D7D7;
      }
      h3{
        color: grey;
        text-align: center;
      }

  </style>

</head>
<body style="height:1500px">
<?php require_once "nav.php"; ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Index.php">Share+</a>
    </div>
    <ul class="nav navbar-nav">
     <!--<li class="active"><a href="#">Home</a></li>-->
      <li><a href="Donate.php">Donate</a></li>
      <li><a href="Organizations.php">Organizations</a></li>
      <li><a href="registration.php">Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </ul>
  </div>
</nav>
<br>
<br>
<br>


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/davidbeckham.jpg" alt="david" width="460" height="300">
      </div>

      <div class="item">
        <img src="images/gorgec.jpg" alt="gorge" width="460" height="300">
      </div>
    
      <div class="item">
        <img src="images/beyonceD.jpg" alt="beyonce" width="460" height="300">
      </div>

      <div class="item">
        <img src="images/angi.jpg" alt="clothing" width="460" height="300">
      </div>

      <div class="title">
        <h3>THIS ARE SOME PEOPLE WHO HAVE DONATE FOR A GOOD CAUSE</h3>
        <h3>JOINED THEM WITH YOUR DONATIONS</h3>
      </div>
    </div>
   
  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<div class="container-wrap">
    <div class="col-md-4">
      <a href="donate.php" class="thumbnail">
        <p>Human rights </p>
        <img src="images/Hrights.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>

    <div class="col-md-4">
      <a href="donate.php" class="thumbnail">
        <p>Child Abuse</p>
        <img src="images/children.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>

    <div class="col-md-4">
      <a href="donate.php" class="thumbnail">
        <p>Homeless</p>
        <img src="images/homeless1.jpg" alt="homeless" style="width:150px;height:150px">
      </a>
    </div>

    <div class="col-md-4">
      <a href="donate.php" class="thumbnail">
        <p>Animal cruelty</p>
        <img src="images/dog.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
      <a href="donate.php" class="thumbnail">
        <p>Food</p>
        <img src="images/food.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
      <a href="donate.php" class="thumbnail">
        <p>Immigrants</p>
        <img src="Images/diverse.jpg" alt="Cinque Terre" style="width:150px;height:150px">
      </a>
    </div>
    <div class="picture" style="height: 280px;"></div>
      <div img src="images/donate.jpg" class="img-responsive" alt="">
    </div>
  </div>
</div>
</div>
</div>
<hr><br>
<div>
</div>

<hr>

<br>
<br>


<!--<div id="transbox" class="col-md-3">
<h2>We an organization based in New York. Dedicated to help people who want to donate for a good cause. </h2><hr>

<!--<button type="button" onclick="alert('Hello World!')">Great Job!</button>-->
</div>-->



</body>
<br>




<footer>
<div id="footer">
      <div class="container">
              <a href='https://www.facebook.com'><i class="fa fa-facebook fa-lg fa-fw"></i></a>
              <a href='www.twitter.com'><i class="fa fa-twitter fa-1x fa-fw"></i></a>
              <a href='https://www.youtube.com'><i class="fa fa-youtube-play fa-lg fa-fw"></i></a>
              <a href='#'><i class="fa fa-rss fa-lg fa-fw"></i></a>
              <a href='#'><i class="fa fa-vine fa-lg fa-fw"></i></a>
              <a href='#'><i class="fa fa-flickr fa-lg fa-fw"></i></a>
              <a href='https://www.linkedin.com'><i class="fa fa-linkedin fa-lg fa-fw"></i></a>
            </span>
      <div class="container2">
            <ul>
              <li class="right">Create by Elvia Sarabia</li>
              <li class="left"></li>
            </ul></div>

      </div>
    </div>
</footer>
</html>