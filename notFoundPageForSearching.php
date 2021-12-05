
<?php
    session_start();
    if(isset($_SESSION['FristName']))
    {
        if(isset($_SESSION['Email'])){
            
            $fName = $_SESSION['FristName']; 
            $lName = $_SESSION['LastName'];   
            $Email = $_SESSION['Email'];     
            $password = $_SESSION['Password'];
            $phone = $_SESSION['Phone'];

            $bn = "$fName[0]"."$lName[0]";
            $bn = strtoupper("$bn");
            //echo"$bn";
        }
        else{
            header("Location: /mainCollegeProject/notLogin.php");
        }
    }
    else{
        header("Location: /mainCollegeProject/notLogin.php");
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">

        <title><?php echo"$fName";?></title>
    </head>
    <body style="background-image: url(https://img.freepik.com/free-photo/blurred-monstera-leaves-shadow-white-background_23-2148162977.jpg?size=626&ext=jpg);background-repeat: no-repeat;background-attachment: fixed;background-size:100% 100%">


    
        <div style="border: 2px solid rgba(124, 133, 124, 0);;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-2 my-1" style="border-radius: 5px;">
                <div class="container-fluid">
                    <img src="https://www.papertownsindia.com/wp-content/uploads/2019/05/logo-flipkart-png-flipkart-logo-png-transparent-background1-800.png"
                        alt="kg" width="200px" height="75px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/mainCollegeProject/fristPage.php"><i class="bi bi-house-fill"></i> Home</a>
                            </li>
                        
                            
                            <li class="nav-item">
                                <a class="nav-link " href="/mainCollegeProject/contactPage.php"><i class="bi bi-telephone-fill"></i> Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/mainCollegeProject/aboutUsPage.php"><i class="bi bi-info-circle-fill"></i> About</a>
                            </li>

                             <li class="nav-item">
                                    <a class="nav-link text-primary" href="/mainCollegeProject/userInfo.php"><i class="bi bi-person-fill"></i><b> <?php echo"$bn";?></b></button></a>
                                </li>
                            
                        </ul>
                        <form class="d-flex" action="searchingPage.php"autocomplete="off" method="get">

                            <input class="form-control me-2" type="search" name="Search_Value"v placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success  " type="submit">Search</button>
                        
                            <a href="/mainCollegeProject/logout.php"> 
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-left: 5px;" > Logout </button>
                            </a>

                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->
        <div>
            <div  class="container-fluid" >

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hi! </strong> <?php echo"$fName";?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            </div>
        </div>

        <div class="container">
            <img src="https://www.qrs.in/frontent/images/noresult.png" alt="not found" width="50%">
        </div>
        <div class="container">
            <div style="margin-top: 5px;">
                <a href="/mainCollegeProject/fristPage.php"><button class="btn btn-secondary"
                                        style="border: none; font-size: 150%; border-radius: 2px; height: 60px; width: 50%; text-align: center;"><b>Back</b></button></a>
            </div>
        </div>
         
        <div class="container-fluid" style="margin-top: 50px;" >
            <div class=" bg-dark" style="margin-bottom: 5px;  position: relative; width: 100%; height: 100px; border-radius: 5px;">
                <div  style="width: 100% ;height: 100px; position: absolute;top: 30%;">
                    <center>
                    <h5 class="text-light"> Thanks for coming in site.</h5>
                    </center>
                </div>
                <!-- <div style=" position: absolute;top: 73%;left:1%;" >
                    <p class="text-light"><span><a href="#">terms & conditions </a></span> &ensp; <span><a href="#"> privacy policy</a></span></p>
                </div> -->
            </div>
            <div>
                <p class="text-light"><span><a href="#">terms & conditions </a></span> &ensp; <span><a href="#"> privacy policy</a></span></p>
            </div>
        </div>
        
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
    </body>
</html>