<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Upload File</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #000000;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<!-- session checking -->

<?php
 session_start();

 if($_SESSION['id']=="")
 {
 	echo "<script>location.href='index.php';</script>";
 }


?>
<body>
	<body style="background-image:url(vr4.jpg);background-size: cover;">

<div class="container">
  <div class="btn-group btn-group-justified">
    <a href="admindetails.php" class="btn btn-primary">Admin details</a>
    <a href="admin.php" class="btn btn-primary">Upload files</a>
    <a href="adminfile.php" class="btn btn-primary">File details</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>
   
  </div>
</div>
<div class="container"style="margin-left: 1000px;margin-top: 90px;width:50px;height:50px;">
  <div class="btn-group-vertical">
    
  </div>
</div>
<div class="signup-form">
    <form  method="post" enctype="multipart/form-data" style="background-color: #3552ab; border:solid #faee07 1px;">
		<h2 style="color: white;">File Upload</h2>
        <div class="form-group">
			<div class="row">
				<div><input type="text" class="form-control" name="filename" placeholder="File Name" required="required"></div>
			</div>        	
        </div>		
		<div class="form-group">
			<div class="row">
				<div><input type="file" class="form-control" name="file" placeholder="upload file" required="required"></div>
			</div>        	
        </div>      
		<div class="form-group">
            <button type="submit" name="submit" value="submit" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
    </form>


<?php
include 'config.php';
// $sql = "SELECT * FROM file_upload WHERE filename='$name' ";


if(isset($_POST['submit']))
{    
    
    $name=$_POST['filename'];
  $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 // $file_size = $_FILES['file']['size'];
 // $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO file_upload(name,file) VALUES('$name','$file')";
 $result=mysqli_query($con,$sql); 
 if($result){
 	echo "inserted";
 }
 else
 {
 	echo"not";
 }
}
?>


</body>
</html>                            