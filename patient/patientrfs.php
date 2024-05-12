<?php
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$f="INSERT INTO patient_request(Patient_ID, Units_in_ml, Blood_group, Reason, Status) VALUES(NULL,'$a','$b','$c','waiting')";
$result=mysqli_query($con, $f);
if($result){
    echo"save";
}
else{
    echo"error";
}
?>