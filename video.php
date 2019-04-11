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
<section id ="welcome-text">
    <div class="page-header">
        <h1>Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Herzlich willkommen auf unserer Homepage.</h1>
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
        <a class="nav-link" href="https://localhost/welcome.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://localhost/aboutus.php">ÜBER UNS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://localhost/video.php">VIDEO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://localhost/forum.php">FORUM</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="https://localhost/contact.php">KONTAKT</a>
      </li>
    </ul>
  </div>
</nav>
</section>