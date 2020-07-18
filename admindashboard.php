<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin dashboard</title>
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
<body style="background-image:url(vr4.jpg);background-size: cover;">

<div class="container">
  <div class="btn-group btn-group-justified">
    <a href="admindetails.php" class="btn btn-primary">Admin details</a>
    <a href="admin.php" class="btn btn-primary">Upload files</a>
    <a href="adminfile.php" class="btn btn-primary">File details</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>
   
  </div>
</div>
<div class="container"style="margin-left: 1000px;margin-top: 200px;width:50px;height:50px;">
  <div class="btn-group-vertical">
    
  </div>
</div>
</body>
</html>
