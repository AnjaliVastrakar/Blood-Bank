<html>
    <head>
        <link rel="stylesheet" href="request.css">
    </head>

    <?php
    session_start();
    if(isset($_SESSION['x'])==false)
    {
        echo"<script>window.location='donor-login.php'</script>";
    }
    $a=$_SESSION['x'];
    echo " Welcome $a";
    ?>

    <body>
    <form action="adminverify.php">
            <header>
                <div class="logod">
                    <img src="/BLOOD/images/bl.png" class="logo">
                </div>
                <div class="navbar-container">
                    <ul class="navbar">
                    <li><a href="donorpannel.php">DASHBOARD</a></li>
                    <li><a href="donate.php">DONATE</a></li>
                    <li><a href="/BLOOD/patient/patient-login.php">REQUEST</a></li>
                    <li><a href="/BLOOD/admin/Admin-login.php">PRINT CIRTIFICATE</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </header>

        <aside>
            <div class="container">
            <table border=2 class="center">
               <tr>
                   <th>S.No.</th>
                   <th>Donation ID</th>
                   <th> Units (in ml)</th>
                   <th>Status</th>
                   <th>Action</th>
                   <th></th>
                </tr>
                <?php
                $i=0;
                $con=mysqli_connect('localhost','root','anjalimysql','bloodbank');
                $g="select * from donor_request";
                $rest=mysqli_query($con, $g);
                echo "<h1>DONATION REQUEST</h1>";

               while($row=mysqli_fetch_array($rest)){
                $i++;
                echo"<tr border:1px>
                <td>$i</td>
                <td>BLo$row[Donor_ID]</td>
                <td>$row[Units_in_ml]</td>
                <td>$row[Status]</td>
                <td><a href='edit.php?id=$row[Donor_ID]'><input type='button' value='edit' style='background-color: green'></a></td>
                <td><a href='delete.php?id=$row[Donor_ID]'><input type='button' value='delete' style='background-color: red'></a></td>
                </tr> ";
                }
                ?>
            </table>
            </div>
        </aside>
</body>
</html>

