<?php
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
echo $f="INSERT INTO donor_request(Donor_ID, Blood_group, Units_in_ml, Disease, Status) VALUES(NULL,'$a','$b','$c','waiting')";
$result=mysqli_query($con, $f);
if($result){
    echo"save";
}
else{
    echo"error";
}

?>