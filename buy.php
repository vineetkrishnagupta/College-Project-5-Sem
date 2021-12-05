<!-- ****** this is main php is page -->
<?php

    $userName = "";
    session_start(); // to the session
    if(isset($_SESSION['FristName']))
    {
        $fName = $_SESSION['FristName']; 
        $lName = $_SESSION['LastName'];   
        $Email = $_SESSION['Email'];     
        $phone = $_SESSION['Phone'];
  
        $bn = "$fName[0]"."$lName[0]";
        $bn = strtoupper("$bn");

        $fullName = $fName ." ". $lName;
    }
    else
    {   // Header function set location not login page of project.
        header("Location: /mainCollegeProject/notLogin.php");
    }

?>
<!-- ****** this about page for this project ****** -->
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">
        
        <title>Details</title>
    </head>

    <!-- ****** this is boody this page ****** -->
    <body style="background-image: url(https://www.wallpapersdsc.net/wp-content/uploads/2016/09/White-Tulips-High-Definition.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="https://www.iconpacks.net/icons/2/free-fast-buy-icon-3048-thumb.png" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel">&ensp;Fill Your Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="welcome()"></button>

                    </div>
                    <!-- ****** this is login modal ****** -->
                    <div class="modal-body">

                        <!-- ****** form tag action = okLogin.php ****** -->
                        <form action="saveDataBuy.php" name="login" autocomplete="off" method="post">
                            <div class="mb-3">

                                <label for="name" class="form-label"><i class="fa fa-user" style="font-size:18px;"></i> Name</label>
                                <input type="txt" class="form-control" id="name"   value="<?php echo"$fullName";?>" name="buyName" required>
                              

                                <label for="buyEmail" class="form-label" style="margin-top: 20px;"><i class="fa fa-envelope" style="font-size:18px;"></i> Email</label>
                                <input type="email" class="form-control" id="buyEmail" value="<?php echo"$Email";?>" name="buyEmail" required>
                       
                        
                                <label for="Phone" class="form-label" style="margin-top: 20px;"><i class="bi bi-telephone-fill"></i> Phone No</label>
                                <input type="tel" class="form-control" id="Phone" value="<?php echo"$phone";?>" name="buyPhone" required>

                                <label for="address" class="form-label" style="margin-top: 20px;"><i class="bi bi-building"></i> Address</label>
                                <input type="txt" class="form-control" id="address" name="buyAddress" required>

                                <label for="buyPincode" class="form-label" style="margin-top: 20px;"><i class="bi bi-geo-alt-fill"></i> Pincode</label>
                                <input type="tel" class="form-control" id="buyPincode" name="pinCode" required>

                            </div>
                            <br>
                            <!-- ****** this is submit button ****** -->
                            <button type="submit" class="btn btn-outline-success btn-lg" style="width:100%;"><b>Submit</b></button>

                            <!-- ****** this is sign in button ****** -->
                            
                        </form>
                    </div>

                    <!-- ****** this <div> for maodal footer -->
                    <div class="modal-footer">
                        <a href="/mainCollegeProject/welcome.php" style="width:100%;">
                        <!-- ****** this is close button ****** -->
                            <button type="button" style="width:100%;" class="btn btn-secondary btn-lg" >Back</button>
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
            function welcome(){
                window.location = "/mainCollegeProject/welcome.php"
            }
      
        </script>
    
    </body>
</html>
<!-- ****** make by vineet krishna gupta ****** -->
<!-- programmer email vineetkrishnagupta@gmail.com -->