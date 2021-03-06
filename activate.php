<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Activate account</title>
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
    color: solid black;
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
<div class="container"style="margin-left: 1000px;margin-top: 50px;width:50px;height:50px;">
  <div class="btn-group-vertical"> 
  </div>
</div>

<div class="container">

  <div class="signup-form">
    <form  method="post" style="background-color:#27242b;border:solid #faee07 1px;">
    <div class="form-group">
      <div class="row">
        <div><input type="text" class="form-control" name="name" value="<?php echo $fetch['name'] ?>" placeholder="Your Name" required="required" readonly></div>
        </div>          
        </div>
        <div class="form-group">
          <div class="row">
              <div><input type="email" class="form-control" name="email" value="<?php echo $fetch['email'] ?>" placeholder="Email" required="required" readonly></div>
               <!--  <div class="col-xs-6"><input type="date" class="form-control" name="date" placeholder="" required="required"></div> -->
            </div>
        </div>
    <div class="form-group">
            <div class="row">
              <div class="col-xs-6" >
                  <input type="text" class="form-control" name="gender" value="<?php echo $fetch['gender'] ?>" placeholder="gender" required="required" readonly>
                </div>
                <div class="col-xs-6" >
                  <input type="text" class="form-control" name="role" value="<?php echo $fetch['role'] ?>" placeholder="Role" required="required" readonly>
                    
                    </select>
                </div>
            </div>
        </div>
    <div class="form-group">
      <div class="row">
        <div class="col-xs-6"><input type="text" class="form-control" name="state" value="<?php echo $fetch['state'] ?>" placeholder="State" required="required" readonly></div>
        <div class="col-xs-6"><input type="text" class="form-control" name="country" value="<?php echo $fetch['country'] ?>" placeholder="Country" required="required" readonly></div>
      </div>          
        </div>      
    <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Activate account</button>
        </div>
    </form>

</div>
</div>

<?php
 if(isset($_POST['submit']))
{
// mysql_real_escape_string($con,
include 'config.php';

$sel="UPDATE registration set status=1 WHERE id='".$_SESSION['id']."'";

$res=mysqli_query($con,$sel);

echo "<script>alert('request send successfully');location.href='#'</script>";

// if($res['id']==1)
// {

//   echo "<script>alert('requested send to attribute authority');location.href='attribute.php'</script>";
// }
}

?>
</body>
</html>                            