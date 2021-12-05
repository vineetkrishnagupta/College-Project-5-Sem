<?php

    session_start();
    session_unset();
    session_destroy();

?>

<!doctype html>
<html lang="en">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">

        <!-- ****** style for otp input ******  -->
        <style>
            input{
                margin: 10px;
                height: 40px;
                width: 10%;
                border: 1px solid black;
                border-radius: 5px;
                text-align: center;
                font-family: arimo;
                font-size: 1.2rem;
                background: #eef2f3;

            }
        </style>

        <title>Wrong OTP !</title>

    </head>
    <body style="background-image: url(https://source.unsplash.com/2000x1000/?black);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="http://cdn.onlinewebfonts.com/svg/img_398183.png" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel">&ensp; Forget Password</h5>
                        <button type="button" class="btn-close" aria-label="Close" onclick="gotoNotLogin()"></button>

                    </div>
                    <div class="modal-body" style="width: auto;">
                        <form autocomplete="off">
                            <div class="mb-3">

                                <label for="ist" class="form-label">Enter OTP</label> <br>   
                                    <div lass="content">
                                        <input type="text" id='ist'    maxlength="1" onkeyup=" clickEvent(this,'sec')"    >
                                        <input type="text" id="sec"    maxlength="1" onkeyup=" clickEvent(this,'third')"  >
                                        <input type="text" id="third"  maxlength="1" onkeyup=" clickEvent(this,'fourth')" >
                                        <input type="text" id="fourth" maxlength="1" onkeyup=" clickEvent(this,'fifth')"  >
                                        <input type="text" id="fifth"  maxlength="1" onkeyup=" clickEvent(this,'six')"    >
                                        <input type="text" id="six"    maxlength="1"                                      >
                                    </div>            
                            </div>
                            <button type="button" id ='submit' class="btn btn-outline-success"><b>Submit</b></button>
                            <button type="button" id ='otpResend' class="btn btn-outline-danger" data-bs-toggle="modal" onclick="resendOTP()">
                                <b>Resend otp</b>
                            </button>
                        </form>
                        <h6 id="otpH6"></h6>
                    </div>
                    <div class="modal-footer">
                        <a href="/mainCollegeProject/notLogin.php" style="width:100%;">
                            <button type="button" style="width:100%;" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>

    <!-- ****** how to show modal in jquery ****** -->
    <script>
        $(document).ready(function(){
            $('#staticBackdrop').modal('show');
        })       
    </script>

    <script>
        $("#six").keyup(function(event) {
            if (event.keyCode === 13) {
                $("#submit").click();
            }
        });
    </script>

    <!-- ****** main js code of this page ****** -->
    <script>

        function clickEvent(first,last){
            if(first.value.length){
                document.getElementById(last).focus();
            }
        }       
    
        document.getElementById("submit").className = "btn btn-success btn-block disabled";
        document.getElementById("otpResend").className = "btn btn-danger btn-lg ";
        document.getElementById("otpH6").innerHTML = "Wrong OTP !";
        document.getElementById("otpH6").className = "text-danger";            

        function resendOTP(){
            window.location = "/mainCollegeProject/forgetPassword.php"
        }
        function gotoNotLogin(){
            window.location = "/mainCollegeProject/notLogin.php"
        }
        function gotoSignUp(){
            window.location = "/mainCollegeProject/signup.php"
        }
        function gotoNotOkSignup()
        {
            window.location = "/mainCollegeProject/notOkSignup.php"
        }

    </script>
<!-- Make by vineet krishna gupta -->
</html>