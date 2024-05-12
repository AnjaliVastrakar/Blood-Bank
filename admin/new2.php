<?php
$r=array("A+","B+","AB+","O+","A-","B-","AB-","O-");
for($i=0; $i<count($r); $i++){
    $con=mysqli_connect("localhost","root","anjalimysql","bloodbank");
    $q="select sum(units_in_ml) AS zz FROM dash where blood_group='$r[$i]'";
    $rls=mysqli_query($con, $q);
    while ($row=mysqli_fetch_array($rls)){
        echo"$r[0]  $row[zz] units <br>";
    }
}
?> 