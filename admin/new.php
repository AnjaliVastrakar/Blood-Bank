<?php
$r=array("A+","B+","AB+","O+","A-","B-","AB-","O-");
for($i=0; $i<count($r); $i++){
    $con=mysqli_connect("localhost","root","anjalimysql","bloodbank");
    $q="select count(units_in_ml) AS units_count FROM dash where blood_group='$r[$i]'";
    $rls=mysqli_query($con, $q);
    while ($row=mysqli_fetch_array($rls)){
        echo"$r[$i]  $row[units_count] units <br>";
    }
}
?>

<?php
session_start();
$a=$_SESSION['x'];
 $con=mysqli_connect("localhost","root","anjalimysql","bloodbank");
 $q="select count(status) AS units_count FROM donor_request where Donor_ID=$a";
 $rls=mysqli_query($con, $q);
 while ($row=mysqli_fetch_array($rls)){
     echo"$row[units_count] units <br>";
 }
?>

