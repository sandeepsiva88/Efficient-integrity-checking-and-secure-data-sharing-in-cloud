<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>File requests</title>
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
		color: #969fa4;
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
		width: 300px;
		height: 70px;
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
	.table,th,td{
		border:2px solid red;
	}
	table tr:hover td{
		background-color: #2480b3;
	}
	.table{
		border-collapse: separate;
		border:solid black 1px;
		/*border-radius: 20px;*/
		/*-moz-border-radius:20px;*/
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
<body style="background-image:url(attri2.jpg);background-size: cover;">

<div class="container">
 <div class="btn-group btn-group-justified">
    <a href="attribute_requests_list.php" class="btn btn-primary">Account Requests</a>
    <a href="attribute_file_request.php" class="btn btn-primary">File Requests</a>
    <a href="acknowledgement.php" class="btn btn-primary">Acknowledment</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>
   
  </div>
</div>
<!-- <div class="container">
<div class="signup-form"> -->
   <div class="container">         
 <table class="table" style="background-color: #182557; margin-top: 50px; border: 3px; border-color:#1010e0; border:8px solid #5454f0;">
    <thead>
      <tr >
        <th style="text-align:center">User id</th>
        <th style="text-align:center">file id</th>
        <th style="text-align:center">Action</th>

      </tr>
    </thead>
    <tbody style="text-align:center; color: orange;">
<?php



if(isset($_GET['id']) && (int)$_GET['id'] && $_GET['act']=="FORWARD"){
 
include 'config.php';

$sel="UPDATE file_request set status=2 WHERE id='".$_GET['id']."'";

$res=mysqli_query($con,$sel);

echo "<script>alert('requested send to CA');location.href='attribute_file_request.php'</script>";
   


}

?>


    <?php
include 'config.php';

$sel="SELECT * FROM file_request WHERE status=1";

$result=mysqli_query($con,$sel);


 while( $fetch=mysqli_fetch_array($result))
 {
 	?>

<td><?php echo $fetch['userid'] ?></td>
<td><?php echo $fetch['filename'] ?></td>

<td>

<a class="btn-lg btn-danger" href="attribute_file_request.php?id=<?php echo $fetch['id'];?>&act=FORWARD" onclick="if(!confirm('Are you sure you want to forward.')) return false;" style="width: 40px">
                    Forward To CA
       </a>
</td>
<tr>
	
</tr>
 <?php	

 }

?>

    	
    </tbody>
  </table>
<!-- </div>

</div> -->
	
</body>
</html>                            