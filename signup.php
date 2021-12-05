<?php

    /*******      This signup page       *******/

    $fristName =  "<script>   document.write(localStorage.getItem('signupFristName'));  </script>";
    $lastName  =  "<script>   document.write(localStorage.getItem('signupLastName'));   </script>";
    $email     =  "<script>   document.write(localStorage.getItem('signupEmailId'));    </script>";
    $password  =  "<script>   document.write(localStorage.getItem('signupPassword'));   </script>";
    $phone     =  "<script>   document.write(localStorage.getItem('signupPhone'));      </script>";

?>

<!--  ******   make by vineet krishna gupta   ******  -->

<!doctype html>
<html lang="en">

    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">

        <title>Sign Up</title>

    </head>
    
    <body style="background-image: url(https://c4.wallpaperflare.com/wallpaper/496/748/922/line-background-wave-dark-wallpaper-preview.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

        <!-- Singn UP Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <!-- ****** This is icone code of sign up ****** -->
                        <img src="data:image/png;base64,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" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
                        
                        <!-- ****** x button  ****** -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="gotoNotLogin()"></button>

                    </div>
                    <div class="modal-body">
                        <div class="modal-body">


                            <!-- ****** main sign up form ******  -->
                            <form action="signupOtp.php" autocomplete="off" method="post">
                                <div class="mb-3">

                                    <label for="InputName" class="form-label">Frist Name</label>
                                    <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="signupfristname" required autofocus>

                                    <label for="InputLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="InputLast8Name" aria-describedby="emailHelp" name="signuplastname" required>

                                    <label for="exampleInputEmail1" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="signupemail" autocomplete="nope" required>

                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="InputPassword1" name="singuppassword" autocomplete="new-password" required>

                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="ConfirmInputPassword1" autocomplete="new-password" name="singupconfirmpassword" required>

                                    <label for="Phone" class="form-label">Phone No</label>
                                    <input type="tel" class="form-control" id="Phone" name="singupphone" required>

                                </div>
                            
                                <button type="submit" class="btn btn-outline-success" id="OTPModalButton"><b>Get OTP</b></button>
                                <button type="reset" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-dismiss="modal" onclick="gotoLogin()"><b>Login</b></button>
                            </form>



                        </div>
                    </div>
                    <div class="modal-footer">

                        <a href="/mainCollegeProject/notLogin.php" style="width:100%;">
                            <button type="button" style="width:100%;" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <!-- ****** how to show modal in jquery ****** -->
        <script>
            $(document).ready(function(){
                $('#staticBackdrop').modal('show');
            })
        </script>

        <!-- ****** main js code of this page ****** -->
        <script>
            function gotoNotLogin(){
                window.location = "/mainCollegeProject/notLogin.php"
            }
            function gotoLogin(){
                window.location = "/mainCollegeProject/login.php"
            }
        </script>
    
    </body>

</html>