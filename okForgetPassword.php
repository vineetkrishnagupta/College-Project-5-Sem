
<!doctype html>
<html lang="en">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">


        <style>
            
        </style>
         
        
        <title>Forget Password</title>
    </head>
    <body style="background-image: url(https://source.unsplash.com/1000x500/?white);background-repeat: no-repeat;background-attachment: fixed;background-size: 100%">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="http://cdn.onlinewebfonts.com/svg/img_398183.png" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel">&ensp; Forget Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="gotoNotLogin()"></button>

                    </div>
                    <div class="modal-body">
                        <form action="setNewPassword.php" method="post">
                            <div class="mb-3">

                            
                                <label for="InputPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="InputPassword" name="password" required>  

                                <label for="ConfirmInputPassword" style="margin-top: 2%;" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="ConfirmInputPassword" name="confirmpassword" required>


                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input success" id="exampleCheck" onclick="Show()">
                                    <label class="form-check-label" for="exampleCheck">Show Password</label>
                                  </div>

                                
                         
                                

                            </div>
                            <button type="submit" class="btn btn-outline-success"><b>Submit</b></button>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" onclick="gotoForgetPassword()">
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
            function Show(){
                var mp = document.getElementById("InputPassword");
                var cp = document.getElementById("ConfirmInputPassword");

                if (mp.type === "password") {
                    mp.type = "text";
                } 
                else {
                    mp.type = "password";
                }

                if (cp.type === "password") {
                    cp.type = "text";
                } 
                else {
                    cp.type = "password";
                }
            }
            function gotoNotLogin(){
                window.location = "/mainCollegeProject/notLogin.php"
            }
            function gotoForgetPassword(){
                window.location = "/mainCollegeProject/forgetPassword.php"
            }
        </script>
    
    </body>
</html>