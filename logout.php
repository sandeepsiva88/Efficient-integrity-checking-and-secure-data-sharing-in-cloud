<title>Redirecting</title>
<?php
session_start();
session_destroy();
$message="logout succesfully";
//echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script type='text/javascript'>location='index.php';</script>";
?>

