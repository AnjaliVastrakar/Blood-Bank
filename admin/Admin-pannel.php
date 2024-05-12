<html>

<head>
    <link rel="stylesheet" href="Admin-pannel.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body>
    <header>
        <div class="logod">
            <img src="/BLOOD/images/bl.png" class="logo">
        </div>
        <div class="navbar-container">
        <?php
            session_start();
            if(isset($_SESSION['x'])===false){
                echo"<script>window.location='/BLOOD/home.php'</script>";
            }
            $a=$_SESSION['x'];
            echo "<h1 class='show'>Welcome $a</h1>";
        ?>
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
                <h1>Available Blood</h1>
                 <?php
                $r=array("A+","B+","AB+","O+","A-","B-","AB-","O-");
                $s=array("/BLOOD/images/A+.png","/BLOOD/images/B+.png","/BLOOD/images/AB+.png","/BLOOD/images/O+.png","/BLOOD/images/A-.png","/BLOOD/images/B-.png","/BLOOD/images/AB-.png","/BLOOD/images/O-.png",);
                for($i=0; $i<count($r); $i++){
                $con=mysqli_connect("localhost","root","anjalimysql","bloodbank");
                $q="select sum(units_in_ml) AS zz FROM dash where blood_group='$r[$i]'";
                $rls=mysqli_query($con, $q);
                while ($row=mysqli_fetch_array($rls)){
                echo"
                        <div class='details'>
                            <img src=$s[$i] alt=''>
                            <h2>Blood Available</h2>
                            <h3>Total: <p id='js'> $row[zz] units units</p></h3>
                        </div>
                    ";
            }
        }
        ?>
            </form>
        </main>
    </div>
</body>

</html>