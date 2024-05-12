<html>
    <head>
        <link rel="stylesheet" href="donate.css">
    </head>

    <?php
    session_start();
    if(isset($_SESSION['x'])==false)
    {
        echo"<script>window.location='donor_login.php'</script>";
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
                    <li><a href="donorpannel.php">DASHBOARD</a></li>
                    <li><a href="donate.php">DONATE</a></li>
                    <li><a href="request.php">REQUEST</a></li>
                    <li><a href="/BLOOD/admin/Admin-login.php">PRINT CIRTIFICATE</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </header>
            <form action="donatesave.php">
        <aside>
        <div class="blur"></div>
               <div class="blur2">
                <div class="container">
                    <img src="" alt="">
                    <h1>Blood Donation Form</h1>
                    <p class="p2">Blood Group:</p>
                    <select name="t1" id="i1">
                        <option>-Select-</option>
                        <option>A+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>O+</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>AB-</option>
                        <option>O-</option>
                    </select>
                    <p class="p2">No. of Units:</p>
                    <input type="text" name="t2" placeholder="No. of Units (in ml)" id="i2" onblur="pass();">
                    <p class="p3">Disease (if any):</p>
                    <textarea rows="10" cols="50" id="i3" name="t3" placeholder="Mention disecse if any (Optional)"></textarea>
                    <input type="submit" value="Submit" class="b1">
                </div>
               </div>
        </aside>
</form>

        <div class="left">
            <div><img src="/BLOOD/images/dn.gif" class="advertise"></div>
        </div>
</body>
</html>

