<!-- This is login page of this project -->

<!doctype html>
<html lang="en">

    <!-- ****** this head tag ****** -->
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- ****** show icon in title ****** -->
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
        <title>Login</title>
    </head>

    <!-- ****** this is boody this page ****** -->
    <body style="background-image: url(https://i.pinimg.com/originals/60/c1/d7/60c1d756153df30300493dee55186664.png);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="https://cdn1.iconfinder.com/data/icons/users-vol-3/32/user-man-enter-login-signup-512.png" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="gotoNotLogin()"></button>

                    </div>
                    <!-- ****** this is login modal ****** -->
                    <div class="modal-body">

                        <!-- ****** form tag action = okLogin.php ****** -->
                        <form action="okLogin.php" name="login" autocomplete="off" method="post">
                            <div class="mb-3">

                                <label for="loginEmail1" class="form-label"><i class="fa fa-envelope" style="font-size:18px;"></i> Email</label>
                                <input type="email" class="form-control" id="loginEmailok" aria-describedby="emailHelp" name="loginEmail" required>
                                <br>
                        
                                <label for="loginPassword1" class="form-label"><i class='fas fa-key' style='font-size:18px'></i> Password</label>
                                <input type="password" class="form-control" id="loginPasswordok" name = "loginPassword" required>

                                <a href="/mainCollegeProject/forgetPassword.php" class="text-success">
                                    <div id="emailHelp" class="form-text text-success">Forget password.</div>
                                </a>

                            </div>

                            <!-- ****** this is submit button ****** -->
                            <button type="submit" class="btn btn-outline-success"><b>Submit</b></button>

                            <!-- ****** this is sign in button ****** -->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" onclick="gotoSignUp()">
                                <b>Sign in</b>
                            </button>
                        </form>
                    </div>

                    <!-- ****** this <div> for maodal footer -->
                    <div class="modal-footer">
                        <a href="/mainCollegeProject/notLogin.php" style="width:100%;">
                        <!-- ****** this is close button ****** -->
                            <button type="button" style="width:100%;" class="btn btn-secondary btn-lg" >Close</button>
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
            function gotoSignUp(){
                window.location = "/mainCollegeProject/signup.php"
            }
        </script>
    
    </body>
</html>
<!-- ****** make by vineet krishna gupta ****** -->
<!-- programmer email vineetkrishnagupta@gmail.com -->