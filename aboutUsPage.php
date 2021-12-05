<!-- ****** this is main php is page -->
<?php

    $userName = "";
    session_start(); // to the session
    if(isset($_SESSION['FristName']))
    {
        $fName = $_SESSION['FristName']; 
        $lName = $_SESSION['LastName'];   
        $bn = "$fName[0]"."$lName[0]";
        $bn = strtoupper("$bn");
    }
    else
    {   // Header function set location not login page of project.
        header("Location: /mainCollegeProject/notLogin.php");
    }

?>
<!-- ****** this about page for this project ****** -->
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

        <!-- ****** this link set icon in title ****** -->
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">

        <title>About</title>
    </head>

    <!-- ****** body of this page ****** -->
    <body  style="background-image: url(https://source.unsplash.com/1000x500/?white);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

        <!-- ****** set nav bar is page ***** -->
        <div style="border: 2px solid rgba(124, 133, 124, 0);">
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
                                <a class="nav-link" href="/mainCollegeProject/contactPage.php"><i class="bi bi-telephone-fill"></i> Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active text-success" href="/mainCollegeProject/aboutUsPage.php"><i class="bi bi-info-circle-fill"></i> About</a>
                            </li>

                            <li class="nav-item">
                                    <a class="nav-link text-primary" href="/mainCollegeProject/userInfo.php"><i class="bi bi-person-fill"></i><b> <?php echo"$bn";?></b></button></a>
                            </li>
                            
                        </ul>
                        <form class="d-flex" action="searchingPage.php"autocomplete="off" method="get">

                            <input class="form-control me-2" type="search" name="Search_Value" placeholder="Search" aria-label="Search">
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

        <div class="container"> <h1><u> About Us </u></h1></div>

        <div class="container"  >
            <div class="row"style="margin: 1% 1% 1% 1%;">

                <div class="col-12 col-xl-6 col-md-6 " style="background-image: url(https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8N3x8fGVufDB8fHx8&w=1000&q=80); background-color: rgb(87, 87, 87); margin-top: 20px; margin-bottom: 20px; height: auto;  border-top-left-radius: 10px; border-bottom-left-radius: 10px;">

                    <div class="container" style="margin-top: 10%;"> 
                        <h5 class="text-success" style=" text-shadow: 0 0 3px #000000, 0 0 2px #000000;" ><i class="fa fa-map-marker" style="font-size:24px"></i> <u>Address</u></h5>
                        <p class="text-light" style="margin-left: 5%;  text-shadow: 0 0 3px #000000, 0 0 3px #000000;">29, purvi katara, adeli bajar,Banda,Uttar Pradesh, 210001</p>
                    </div><hr>

                    <div class="container" style="margin-top: 2%;">
                        <h5 class="text-success" style=" text-shadow: 0 0 3px #000000, 0 0 2px #000000;" ><i class="fa fa-envelope" style="font-size:20px;"></i>  <u>Email</u></h5>
                        <p class="text-light" style="margin-left: 5%; margin-bottom: 0%; text-shadow: 0 0 3px #000000, 0 0 3px #000000;"><a class="text-light" href="">vineetkrishnagupta@gmail.com</a></p>
                        <p class="text-light" style="margin-left: 5%; margin-bottom: 0%; text-shadow: 0 0 3px #000000, 0 0 3px #000000;"><a class="text-light" href="">utkarsh9758@gmail.com</a></p>
                        <p class="text-light" style="margin-left: 5%; margin-bottom: 0%; text-shadow: 0 0 3px #000000, 0 0 3px #000000;"><a class="text-light" href="">satyammishra8151@gmail.com</a></p>
                        <p class="text-light" style="margin-left: 5%; margin-bottom: 0%; text-shadow: 0 0 3px #000000, 0 0 3px #000000;"><a class="text-light" href="">arunprataps117@gmail.com</a></p>
                        <p class="text-light" style="margin-left: 5%; text-shadow: 0 0 3px #000000, 0 0 3px #000000;"><a class="text-light" href="">vinodkcnit@gmail.com</a></p>
                    </div><hr>

                    <div class="container" style="margin-top: 2%;">
                        <h5 class="text-success" style=" text-shadow: 0 0 3px #000000, 0 0 2px #000000;" ><i class="fa fa-facebook-f" style="font-size:24px"></i> <u>Facebook</u></h5>
                        <p class="text-light" style="margin-left: 5%;  text-shadow: 0 0 3px #000000, 0 0 3px #000000;"><a  class="text-light" href="https://www.facebook.com/people/Vineet-Krishna-Gupta/100023646311127/">https://www.facebook.com/people/Vineet-Krishna-Gupta/100023646311127/</p></a>
                    </div><hr>

                    <div class="container" style="margin-top: 2%;  ">
                        <h5 class="text-success" style=" text-shadow: 0 0 3px #000000, 0 0 2px #000000;" ><i class="fa fa-phone" style="font-size:24px;"></i> <u>Phone</u></h5>
                        <p class="text-light" style="margin-left: 5%; margin-bottom: 0%;  text-shadow: 0 0 3px #000000, 0 0 3px #000000;">6394512899</p>
                        <p class="text-light" style="margin-left: 5%;  text-shadow: 0 0 3px #000000, 0 0 3px #000000;">9839760815</p>
                    </div>
                    <hr style="margin-bottom: 20%;">
                </div>


                <!-- ****** feedback form ****** -->
                <div class="col-12 col-xl-6 col-md-6 "  style="height:  auto; border-top-right-radius: 10px; border-bottom-right-radius: 10px; background-color: rgb(184, 184, 184);"><br>

                    <div class="container"><hr>

                        <h4 class="text-dark"><img src="https://static.thenounproject.com/png/204643-200.png" style="height: 10%; width: 20%" alt="#"> Feedback  </h4><hr>
                        <form action="submitFeedback.php" autocomplete="off" method="post">
                            <div class="mb-3">                               

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput"><i class="fa fa-envelope" style="font-size:18px;"></i> Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" name="title" id="Phone" placeholder="name@example.com">
                                    <label for="Phone"><i class="bi bi-pencil-square" style="font-size:18px;"></i> Title</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" name="comments" placeholder="Leave a comment here"  style="height: 150px;" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea"><i class="fa fa-comments" style="font-size:18px;"></i> Comments</label>
                                </div><hr>

                            </div>
                            <!-- ****** not use ****** -->
                            <!-- <button type="reset" style="width:100%;" class="btn btn-success btn-lg"  onclick="gotoHomePage()"><b>Back to Home</b></button><br><br> --> 
                            <button type="submit"style="width:100%;" class="btn btn-secondary btn-lg" ><b>Submit</b></button><hr>
                        </form>

                    </div>
                </div>

            </div>
        <!-- ****** this is futter of is page ****** -->
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