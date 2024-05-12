<html>
    <head>
        <link rel="stylesheet" href="patient-login.css">
        <script>
            function Email(){
                var a=document.getElementById("i1").value;
                var Ab= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if(Ab.test(a)==false){
                    document.getElementById("e1").innerHTML="invalid";
                    document.getElementById("e1").style.color="red";
                }
                else{
                    document.getElementById("e1").innerHTML="valid";
                    document.getElementById("e1").style.color="green";
                }
            }
            function pass(){
                var a=document.getElementById("i2").value;
                var Ab= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    
                if(Ab.test(a)==false){
                    document.getElementById("e2").innerHTML="invalid";
                    document.getElementById("e2").style.color="red";
                }
                else{
                    document.getElementById("e2").innerHTML="valid";
                    document.getElementById("e2").style.color="green";
                }
            }
            </script>
    </head>

    <body>
        <form action="patientverify.php">
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
    
            <aside>
               <div class="blur"></div>
               <div class="blur2">
                <div class="container">
                    <img src="" alt="">
                    <h1>PATIENT LOGIN</h1>
                    <p class="p2">EMAIL ID</p>
                    <input type="text" name="t1" placeholder="Enter Email ID" id="i1" onblur="Email();"><span id="e1"></span>
                    <p class="p2">PASSWORD</p>
                    <input type="password" name="t2" placeholder="Enter Password" id="i2" onblur="pass();"><span id="e2"></span><br>
                    <input type="submit" value="LOGIN" class="b1">
                    <h2>Don't have an account?<a href="patient-register.php" class="a2">Register</a></h2>
                </div>
               </div>
            </aside>
        </form>
    </body>