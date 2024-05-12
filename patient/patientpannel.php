<html>
    <head>
        <link rel="stylesheet" href="patientpannel.css">
    </head>

    <?php
    session_start();
    if(isset($_SESSION['x'])==false)
    {
        echo"<script>window.location='patient-login.php'</script>";
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
                    <li><a href="patientpannel.php">DASHBOARD</a></li>
                    <li><a href="patientrf.php">REQUEST</a></li>
                    <li><a href="request.php">REQUEST HISTORY</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </header>

            <aside>
            <form action="">
                <h1>Available Blood</h1>
                <div class="center">
                            <?php
                            $con=mysqli_connect("localhost","root","anjalimysql","bloodbank");
                            $b="select count(Status) AS Status_count FROM patient_request";
                            $rls=mysqli_query($con, $b);
                            while ($row=mysqli_fetch_array($rls)){
                            echo" <div class='details'>
                            <img src='/BLOOD/images/AB+.png'>
                            <h2>Blood Requested</h2>
                            <h3>Total: <p id='js'> $row[Status_count]</p></h3>
                            </div>";
                            }
                        
                            $c="select count(Status) AS Status_count FROM patient_request";
                            $rls=mysqli_query($con, $c);
                            while ($row=mysqli_fetch_array($rls)){
                            echo" <div class='details'>
                            <img src='/BLOOD/images/AB+.png'>
                            <h2>Total Request</h2>
                            <h3>Total: <p id='js'> $row[Status_count]</p></h3>
                            </div>";
                            }
                            
                           
                            $d="select count(Status) AS Status_count FROM patient_request where Status='Waiting'";
                            $rls=mysqli_query($con, $d);
                            while ($row=mysqli_fetch_array($rls)){
                            echo" <div class='details'>
                            <img src='/BLOOD/images/AB+.png'>
                            <h2>Request Pending</h2>
                            <h3>Total: <p id='js'> $row[Status_count]</p></h3>
                            </div>";
                            }
                            
                            $e="select count(Status) AS Status_count FROM patient_request where Status='Accepted'";
                            $rls=mysqli_query($con, $e);
                            while ($row=mysqli_fetch_array($rls)){
                            echo" <div class='details'>
                            <img src='/BLOOD/images/AB+.png'>
                            <h2>Request Accepted</h2>
                            <h3>Total: <p id='js'> $row[Status_count]</p></h3>
                            </div>";
                            }
                     
                            $f="select count(Status) AS Status_count FROM patient_request where Status='Rejcted'";
                            $rls=mysqli_query($con, $f);
                            while ($row=mysqli_fetch_array($rls)){
                            echo" <div class='details'>
                            <img src='/BLOOD/images/AB+.png'>
                            <h2>Request Rejected</h2>
                            <h3>Total: <p id='js'> $row[Status_count]</p></h3>
                            </div>";
                            }
                            ?>
                        </div>
            </form>
        </aside>
    </body>
</html>