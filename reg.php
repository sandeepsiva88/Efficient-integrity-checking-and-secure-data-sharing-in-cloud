<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Registration</title>
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
	.signup-form h2:before, .signup-form h2:after{
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


<body style="background-image:url(loginimg.jpg);background-size: cover;">

<div class="container">
  <div class="btn-group btn-group-justified">
    <!-- <a href="image.php" class="btn btn-primary">Home</a> -->
    <a href="reg.php" class="btn btn-primary">Register</a>
    <a href="index.php" class="btn btn-primary">Login</a>
    
  </div>
</div>
<div class="container">

	<div class="signup-form">
    <form  method="post" style="background-color:#1b063d;">
		<h2 style="color:white">Register</h2>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" autocomplete="off" name="name" placeholder="Your Name" required="required"></div>
				<div class="col-xs-6"><input type="password" class="form-control" name="password" placeholder="password" required="required"></div>
			</div>  
        </div>
        <div class="form-group">
        	<div class="row">
        	    <div><input type="email" class="form-control" autocomplete="off" name="email" placeholder="Email" required="required"></div>
               <!--  <div class="col-xs-6"><input type="date" class="form-control" name="date" placeholder="" required="required"></div> -->
            </div>
        </div>
		<div class="form-group">
            <div class="row">
            	<div>
        	        <select class="form-control" name="gender">
        	        <option value="Gender" placeholder="Gender">Gender</option>	
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                
                <div >
                	<input type="text" name="role" value="User" class="hide">
                </div>
                </div>
            </div>
        </div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" autocomplete="off" name="country" placeholder="Country" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" autocomplete="off" name="state" placeholder="State" required="required"></div>
				
			</div>        	
        </div>      
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register</button>
        </div>
    </form>

</div>

<?php

if(isset($_POST['submit']))
{

$name =$_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$gender= $_POST['gender'];
$role= $_POST['role'];
$state= $_POST['state'];
$country= $_POST['country'];



include 'config.php';



$sql = "SELECT * FROM registration WHERE email='$email' ";
$result =mysqli_query($con, $sql);
$row = mysqli_num_rows($result);

if ($row==0) {
	
$ins="INSERT INTO registration SET name='".$name."',email='".$email."',password='".$password."',gender='".$gender."',role='".$role."',state='".$state."',country='".$country."'";

$result=mysqli_query($con,$ins);


if($result)
{
      echo "<script>alert('Registration Success');location.href=''</script>";
}
else
{
   echo "<script>alert('Registration Failed');</script>";
}

	}else
{
	echo "<script>alert('This mail is already existed');</script>";
}

}


?>

</body>
</html>                            