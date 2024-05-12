<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$e="DELETE FROM Patient_register where Patient_ID=$a";
$result=mysqli_query($con, $e);
if($result){
    echo"delete";
}
else{
    echo"error";
}
?>
