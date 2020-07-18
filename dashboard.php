<!DOCTYPE html>
<html lang="en">
<head>
  <title>dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!-- session checking -->

<?php
 session_start();

 if($_SESSION['id']=="")
 {
  echo "<script>location.href='index.php';</script>";
 }


?>
<body style="background-image:url(dashboard4.jpeg);background-size: cover;">

<div class="container">
  <div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-primary">Home</a>
    <a href="reg.php" class="btn btn-primary">Register</a>
    <a href="index.php" class="btn btn-primary">Login</a>
   
  </div>
</div>
<div class="container"style="margin-left: 1000px;margin-top: 200px;width:50px;height:50px;">
  <div class="btn-group-vertical">
    
  </div>
</div>
</body>
</html>
