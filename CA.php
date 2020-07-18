<script>
setInterval(function(){
   window.location.reload(1);
}, 5000);
</script>



<?php
include 'config.php';
 session_start();

$sel="SELECT * FROM registration WHERE status=2";

$result=mysqli_query($con,$sel);

 while( $fetch=mysqli_fetch_array($result))
 {

$sel="UPDATE registration set status=3 WHERE id='".$fetch['id']."'";
$res=mysqli_query($con,$sel);

}




$select1 ="SELECT * FROM file_request where status=2";

$result1= mysqli_query($con,$select1);


while( $fetch=mysqli_fetch_array($result1))
{

 $select2 ="SELECT * FROM registration where id='".$fetch['userid']."'";
$result2=mysqli_query($con,$select2);

$row =mysqli_num_rows($result2);


// $fet2=mysqli_fetch_array($result2);

// $rows=mysqli_num_rows($fet2);

while($row!=0)
{

$key=rand(100,99999);


$enckey=base64_encode($key);

	$sel="UPDATE file_request set status=3,key_GEN='".$enckey."' WHERE id='".$fetch['id']."'";

	$res=mysqli_query($con,$sel);
}




}












?>