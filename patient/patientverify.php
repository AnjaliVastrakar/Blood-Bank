<?php
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=0;
$con=mysqli_connect("localhost","root","anjalimysql","bloodbank");
$d="select * from patient_register";
$result=mysqli_query($con, $d);

while($row=mysqli_fetch_array($result)){
    if($row['Email']==$a && $row['Password']==$b ){
        $c=$c+1;
    }
}
if($c==0){
        echo"invalid";
    }
    else{
        session_start();
        $_SESSION['x']=$a;
        echo"<script>
             window.location='patientpannel.php'
             </script>";
    }
?>