<!DOCTYPE html>
<html lang="en">
<head>
  <title>User dashboard</title>
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
<body style="background-image:url(vr5.jpg);background-size: cover;">

<div class="container">
  <div class="btn-group btn-group-justified">
  <?php
include 'config.php';
 // session_start();

$sel="SELECT * FROM registration WHERE id='".$_SESSION['id']."'";

$result=mysqli_query($con,$sel);


  $fetch=mysqli_fetch_array($result);



if($fetch['status']==0)
{

?>
<a href="activate.php" class="btn btn-primary">Activate account</a>
<?php

}


?>



<?php


if($fetch['status']==3)
{

?>
 <a href="requestfile.php" class="btn btn-primary">Request file</a>
    <a href="download.php" class="btn btn-primary">View files</a>
<?php

}

?>


<?php


if($fetch['status']==2)
{

echo "<script>alert('Account not activated');</script>";

}

?>


   
    <a href="logout.php" class="btn btn-primary">Logout</a>
   
  </div>
</div>
<div class="container"style="margin-left: 1000px;margin-top: 200px;width:50px;height:50px;">
  <div class="btn-group-vertical">
    
  </div>
</div>
</body>
</html>
