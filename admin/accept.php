<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$f="update donor_request set Status='Accepted' where Donor_ID=$a";
$result=mysqli_query($con, $f);
if($result){
    echo"save";
}
else{
    echo"error";
}
?>