
<!doctype html>
<html lang="en">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
         
        
        <title>Forget Password</title>
    </head>
    <body style="background-image: url(https://source.unsplash.com/2000x1000/?black);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="http://cdn.onlinewebfonts.com/svg/img_398183.png" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel">&ensp; Forget Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="gotoNotLogin()"></button>

                    </div>
                    <div class="modal-body">
                        <form action="getOTPForForgetPassword.php" method="post">
                            <div class="mb-3">

                                <label for="loginEmail1" class="form-label"><i class="fa fa-envelope" style="font-size:18px;"></i> Email</label>
                                <input type="email" class="form-control" id="loginEmailok" aria-describedby="emailHelp" name="loginEmail" required>

                            </div>
                            <button type="submit" class="btn btn-outline-success"><b>Get OTP</b></button>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" onclick="gotoLogin()">
                                <b><i class='fas fa-reply-all' style='font-size:18px'></i> Back</b>
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="/mainCollegeProject/notLogin.php" style="width:100%;">
                            <button type="button" style="width:100%;" class="btn btn-secondary btn-lg" >Close</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

   
        <script>
            $(document).ready(function(){
                $('#staticBackdrop').modal('show');
            })
        </script>
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