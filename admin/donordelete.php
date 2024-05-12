<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$e="DELETE FROM donor_register where Donor_ID=$a";
$result=mysqli_query($con, $e);
if($result){
    echo"delete";
}
else{
    echo"error";
}
?>
