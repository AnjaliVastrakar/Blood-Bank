<?php
$a=$_GET['id'];
$b=$_GET['t1'];
$c=$_GET['t2'];
$d=$_GET['t3'];
$e=$_GET['t4'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$f="update patient_register set Name='$b', Email='$c', Mobile='$d', Password='$e' where Donor_ID=$a";
$result=mysqli_query($con, $f);
if($result){
    echo"save";
}
else{
    echo"error";
}
?>