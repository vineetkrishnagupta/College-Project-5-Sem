<?php

    $userName = "";
    session_start();
    if(isset($_SESSION['FristName'])){
        $fName = $_SESSION['FristName']; 
        $lName = $_SESSION['LastName'];   
        $bn = "$fName[0]"."$lName[0]";
        $bn = strtoupper("$bn");
        //echo"$bn";
    }
    else{
        header("Location: /mainCollegeProject/notLogin.php");
    }

?>
<!doctype html>
<html lang="en">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
        <title>Successfully Submitted</title>
    </head>
    <body  style="background-image: url(https://source.unsplash.com/1000x500/?white);background-repeat: no-repeat;background-attachment: fixed;background-size: 100%">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <img src="data:image/png;base64,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" height="50" alt="not found">
                        <h5 class="modal-title" id="staticBackdropLabel"> &ensp;Successfully Submitted </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="back()"></button>

                    </div>
                    <div class="modal-body"><br>
                            <h1><img src="https://icons.veryicon.com/png/128/miscellaneous/8atour/submit-successfully.png" style="width: 20%;" alt="">&ensp;Thank you</h1><br>
                    </div>
                    <div class="modal-footer">
                        <a href="/mainCollegeProject/fristPage.php" style="width:100%;">
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
            function back(){
                window.location = "/mainCollegeProject/fristPage.php"
            }
            function gotoSignUp(){
                window.location = "/mainCollegeProject/signup.php"
            }
        </script>
    
    </body>
</html>