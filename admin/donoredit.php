<form action="donorupdate.php">
<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
$b="select * from donor_register where Donor_ID='$a'";
$rest=mysqli_query($con, $b);
while($row=mysqli_fetch_array($rest)){
    echo"
    <input type='text' name=id value=$a>
    <input type='text' name=t1 value=$row[Name]>
    <input type='text' name=t2 value=$row[Email]>
    <input type='text' name=t3 value=$row[Mobile]>
    <input type='text' name=t4 value=$row[Password]>
    <a href='donorupdate.php?id=$row[Donor_ID]'><input type='submit' value=save></a>
    ";
}
?>
</form>