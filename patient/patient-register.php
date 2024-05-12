<html>
    <head>
        <link rel="stylesheet" href="patient-register.css">
        <script>
            function name(){
                var a=document.getElementById("box").value;
                var Ab= /^[a-zA-Z0-9_]{5,15}$/;
                if(Ab.test(a)==false){
                    document.getElementById("e1").innerHTML="invalid";
                    document.getElementById("e1").style.color="rgb(173, 68, 68)";
                }
                else{
                    document.getElementById("e1").innerHTML="valid";
                    document.getElementById("e1").style.color="greenyellow";
                }
            }
            function Email(){
                var a=document.getElementById("box2").value;
                var Ab= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if(Ab.test(a)==false){
                    document.getElementById("e2").innerHTML="invalid";
                    document.getElementById("e2").style.color="red";
                }
                else{
                    document.getElementById("e2").innerHTML="valid";
                    document.getElementById("e2").style.color="greenyellow";
                }
            }
            function mobile(){
                var a=document.getElementById("box3").value;
                var Ab=/^(\d{3})[- ]?(\d{3})[- ]?(\d{4})$/;
                if(Ab.test(a)==false){
                    document.getElementById("e3").innerHTML="invalid";
                    document.getElementById("e3").style.color="red";
                }
                else{
                    document.getElementById("e3").innerHTML="valid";
                    document.getElementById("e3").style.color="greenyellow";
                }
            }
            function pass(){
                var a=document.getElementById("box4").value;
                var Ab= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

                if(Ab.test(a)==false){
                    document.getElementById("e4").innerHTML="invalid";
                    document.getElementById("e4").style.color="red";
                }
                else{
                    document.getElementById("e4").innerHTML="valid";
                    document.getElementById("e4").style.color="greenyellow";
                }
            }
        </script>
    </head>
    
    <body>
        <header>
            <div class="logod">
                <img src="/BLOOD/images/bl.png" class="logo">
            </div>
            <div class="navbar-container">
                <ul class="navbar">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="/BLOOD/donor/donor-login.php">DONOR</a></li>
                    <li><a href="/BLOOD/patient/patient-login.php">PATIENT</a></li>
                    <li><a href="/BLOOD/admin/Admin-login.php">ADMIN</a></li>
                </ul>
            </div>
        </header>

       <form action="patientregistration.php">
       <aside>
            <div class="blur"></div>
            <div class="blur2">
             <div class="container">
               <h1>REGISTERATION</h1>
               <hr>
               <p class="p1">NAME</p>
               <input type="text" placeholder="Enter Name" name="t1" id="box" class="i1" onblur="name();"><p id="e1" class="an"></p>
               <p class="p2">EMAIL</p>
               <input type="text" placeholder="Enter Email Id" name="t2" id="box2" class="i2" onblur="Email();"><p id="e2" class="an"></p>
               <p class="p2">MOBILE</p>
               <input type="text" placeholder="Enter Mobile Number" name="t3" id="box3" class="i2" onblur="mobile();"><p id="e3" class="an"></p>
               <p class="p2">PASSWORD</p>
               <input type="password" placeholder="Enter Password" name="t4" id="box4" class="i2" onblur="pass();"><p id="e4" class="an"></p><br>
               <input type="submit" value="submit" class="button">
           </div>
           </div>
        </aside>
       </form>
    </body>
</html>