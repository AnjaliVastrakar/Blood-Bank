<html>

<head>
    <link rel="stylesheet" href="donorlist.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<?php
session_start();
if(isset($_SESSION['x'])==false)
{
    echo"<script>window.location='/BLOOD/home.php'</script>";
}
$a=$_SESSION['x'];
echo " Welcome $a";
?>

<body>
    <header>
        <div class="logod">
            <img src="/BLOOD/images/bl.png" class="logo">
        </div>
        <div class="navbar-container">
            <ul class="navbar">
                <li><a href="/BLOOD/home.php">HOME</a></li>
                <li><a href="/BLOOD/donor/donor-login.php">DONOR</a></li>
                <li><a href="/BLOOD/patient/patient-login.php">PATIENT</a></li>
                <li><a href="/BLOOD/admin/Admin-login.php">ADMIN</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <aside>
            <ul class="sidebar">
                <li>
                    <a href="Admin-pannel.php">
                        <i class="uil uil-estate"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="donorlist.php">
                        <i class="uil uil-medical-drip"></i>
                        <span>Donor List</span>
                    </a>
                </li>
                <li>
                    <a href="patientlist.php">
                        <i class="uil uil-clinic-medical"></i>
                        <span>Patient Lst</span>
                    </a>
                </li>
                <li>
                    <a href="donation.php">
                        <i class="uil uil-heart-medical"></i>
                        <span>Donations</span>
                    </a>
                </li>
                <li>
                    <a href="bloodrequest.php">
                        <i class="uil uil-folder-question"></i>
                        <span>Request</span>
                    </a>
                </li>
                <li>
                    <a href="/BLOOD/admin/Admin-logout.php">
                        <i class="uil uil-signout"></i>
                        <span>Logut</span>
                    </a>
                </li>
            </ul>
        </aside>
        <main>
            <form action="">
            <table border=2 class="table">
               <tr>
                   <th>S.No.</th>
                   <th>Donar ID</th>
                   <th> Donor Name</th>
                   <th>Donor Email</th>
                   <th>MObile NO.</th>
                   <th>Action</th>
                   <th></th>
                </tr>
                <?php
                $i=0;
                $con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
                $g=" SELECT donor_request.Donor_ID, donor_register.Name, donor_register.Email,  donor_register.Mobile FROM donor_request INNER JOIN donor_register ON donor_request.Donor_ID = donor_register.Donor_ID;";
                $rest=mysqli_query($con, $g);
                echo "<h1>List Of All Donors</h1>";

               while($row=mysqli_fetch_array($rest)){
                $i++;
                echo"<tr border:1px>
                <td>$i</td>
                <td>$row[Donor_ID]</td>
                <td>$row[Name]</td>
                <td>$row[Email]</td>
                <td>$row[Mobile]</td>
                <td><a href='donoredit.php?id=$row[Donor_ID]'><input type='button' value='edit' style='background-color: green'></a></td>
                <td><a href='donordelete.php?id=$row[Donor_ID]'><input type='button' value='delete' style='background-color: red'></a></td>
                </tr> ";
                }
                ?>
                </table>
            </form>
        </main>
    </div>
</body>
</html>
