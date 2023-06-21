<?php 





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    
</head>
<body>
    <!-- HEADERS -->
    <div class="headers">
        <div class="d-flex sticky-top container-fluid px-0">
            <div class="dropdown">
                <button id="myButton" class="btn position-relative top-50 start-50 translate-middle border-0 py-0" type="button"><img src="Pics/Three Stripes.png"></button>

                <script>
                    var peringatan = document.getElementById("myButton").addEventListener("click", function() {
                        alert("Sorry, you don't have any access!");
                    });
                </script>

            </div>
            <h1 class="text-center py-3">MOCOOL</h1>
        </div>
    </div>
        

    <!-- Login -->
    <div class="Logins p-0 m-0">
        <div class="container p-3 rounded-5">
            <h3 class="pt-0 m-3 text-white fw-light text-center">Sign in</h3>
            <form action="index.php" method="POST" onsubmit="return validateForm()">
                <input type="text" name="" id="uname" placeholder="Username" class="m-3 p-3 py-1 rounded-4 bg-black">
                <br>
                <input type="password" name="" id="pass" placeholder="Password" class="mx-3 mt-3 p-3 py-1 rounded-4 bg-black">
                <br>
                <a href="lupa.php" class="forgot">Forgot password?</a>
                <br>
                <div class="text-center">
                    <button type="submit" class="mx-3 mt-3 mb-0 p-1 rounded-5 fw-bolder" value="Submit">Submit</button>
                </div>
                <p class="mt-3">Don't have any account?<a href="signup.php"> Sign Up!</a></p>
                
            </form>
            <script>
                function validateForm() {
                    var uname = document.getElementById("uname").value;
                    var pass = document.getElementById("pass").value;
                    
                    if (uname.trim() === "") {
                        alert("You have not entered your username!");
                        return false; // Mencegah pengiriman formulir
                    }
                    
                    if (pass.trim() === "") {
                        alert("You have not entered your password!");
                        return false; // Mencegah pengiriman formulir
                    }
                    
                    return true; // Mengizinkan pengiriman formulir
                }  
            </script>

        </div>
    </div>
</body>
</html>