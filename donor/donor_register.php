<?php
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$d=$_GET['t4'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$e="select * from donor_register where (Name='$a' OR Email='$b' OR Mobile='$c')";
$result=mysqli_query($con, $e);

if($rest=mysqli_fetch_array($result)){
    echo"Already exist";
}
else{
    $f="INSERT INTO donor_register(Name, Email, Mobile, Password) VALUES ('$a','$b','$c','$d')";
    $result=mysqli_query($con, $f);
    if($result){
        echo"save";
        echo"<script>
        window.location='donor-login.php'
        </script>";
    }
    else{
        echo"error";
    }
}
?>
