<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>

<html>
<head>
<title>M133 Website</title>
<link rel ="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<section id="welcome-text">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
	<p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</section>
<!----Navigationbar---->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="img/2_logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">VIDEO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SHOP</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>
	<!------Slider-----> :
<div id="slider"> 
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/Nummer1.jpg">
		<div class="carousel-caption">
			<h5> TECHNISCHE BERUFSSCHULE ZÜRICH
		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/Nummer2.jpg" >
		<div class="carousel-caption">
			<h5> IT - BI16b - MODUL 133
		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/Nummer3.jpg" >
		<div class="carousel-caption">
			<h5> SHAKISAN JEIYASILAN, PHILIPP ZAHNER
		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
	<!------About------>
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h2> About US </h2>
<div class="about-content">
Like this video and your questions in comment section, don't forget
to Subscribe Easy Tutorials Youtube channel to watch more videos of website designing, digital marketing 
and photoshop.
</div>
<button type="button" class="btn btn-primary">Read more>
</button>
</div>
<div class="col-md-6">
	<p> Unser Projekt</p>
	<div class="progress">
	<div class="progress-bar">
	
	</div>
</div>
</div>
</div>
</section>	
</body>
</html>