<?php

    $userName = "";
    session_start();
    if(isset($_SESSION['FristName'])){
        $fName = $_SESSION['FristName']; 
        $lName = $_SESSION['LastName'];   
        $bn = "$fName[0]"."$lName[0]";

        $bn = strtoupper("$bn");
        
        // This is a Book Id and Book Name session.
        $_SESSION['BookId'] = "000011";
        $_SESSION['BookName']  = "Linear Programming";
    }
    else{
        header("Location: /mainCollegeProject/notLogin.php");
    }
/* ****** This php code written by - vineet krishna gupta ****** */
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">

        <!-- ****** This is title of this page ****** -->
        <title>Liner Programming and Gameing</title>

    </head>
    <body  style="background-color: rgba(235, 219, 219, 0.377);">

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
                                <a class="nav-link" href="/mainCollegeProject/aboutUsPage.php"><i class="bi bi-info-circle-fill"></i> About</a>
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
        
        <div class="container" style="margin-top: 15px;">
                    
            <div class="row">
                <div class="col-12 col-xl-4 col-md-4 ">
                    <div style="border: 1px solid rgba(18, 20, 20, 0.568); border-radius: 5px; padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;">
                        <div>

                            <!-- <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <div align="right"><button class="btn"><i class="fa fa-heart-o text-danger" style="font-size: 30px;"></i></button></div> -->
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/k52s58w0/book/3/3/1/linear-programming-with-game-theory-original-imafnujqzcezqf8f.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                        </div>

                        <div style="height:auto;">

                            
                            <div style="margin-top: 10px;">
                                <a href="#"><button class="btn btn-success"
                                        style="border: none; font-size: 150%; border-radius: 2px; height: 60px; width: 100%; text-align: center;" onclick="buy()"><b><i class="bi bi-cart-fill"></i> Buy</button></b></a>
                            </div>

                            <div style="margin-top: 10px;">
                                <a href="/mainCollegeProject/fristPage.php"><button class="btn btn-secondary"
                                        style="border: none; font-size: 150%; border-radius: 2px; height: 60px; width: 100%; text-align: center;"><b><i class="bi bi-box-arrow-in-left"></i> Back</b></button></a>
                            </div>
                        

                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-xl-8 col-md-8 " style="margin-top: 10px;">
                    <div class="container">
                        <h5>
                            Linear Programming With Game Theory  (English, Paperback, Pundir Sudhir Kumar)
                        </h5>
                        <div class="container">

                            <div>

                                <span class="fa fa-star text-success "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <samp>(1.0)</samp>
                                <samp align = "right" class="text-danger" ><buton  class="btn" onclick="heartbtn()"><i id='heart' class="fa fa-heart-o text-danger" style="font-size: 30px;" ></i></button>19.6M</samp>
        
                            </div>
                            <!-- <div>
                                <samp align = "right" class="text-danger"><button class="btn" onclick="heartbtn()"><i id='heart' class="fa fa-heart-o text-danger" style="font-size: 30px;" ></i></button>89.1M</samp>
                            </div> -->
                            <div>
                                <p><span style="font-size: 30px;" ><b>₹523.00</b></span>&emsp;<span ><s>₹600.00</s></span></p>
                            </div>
                            <hr>
                            <div>
                                <h4>
                                    Available offers
                                </h4>
                                <ul>
                                    <p class="text-success">
                                        <b><i class="bi bi-bank2 text-success"></i> Bank Offer </b><span class="text-dark">5% Unlimited Cashback on Flipkart Axis Bank Credit Card</span>
                                    </p>
                                    <p class="text-success">
                                        <b><i class="bi bi-bank2 text-success"></i> Bank Offer </b><span class="text-dark">20% off on 1st txn with Amex Network Cards issued by ICICI Bank,IndusInd Bank,SBI Cards and Mobikwik</span>
                                    </p>
                                    <p class="text-success">
                                        <b><i class="bi bi-bank2 text-success"></i> Bank Offer </b><span class="text-dark">15% Instant discount on first Pay Later order of ₹500 and above</span>
                                    </p>
                                    <p class="text-success">
                                        <b><i class="bi bi-bank2 text-success"></i> Bank Offer </b><span class="text-dark">10% Off on First time ICICI Bank Mastercard Credit Card transaction, TnC Applicable</span>
                                    </p>
                                </ul>
                            </div>
                            <div>
                                <h6 class="text-success">
                                    <b>
                                        <i class="bi bi-file-earmark-person-fill"></i>
                                    </b> Author
                                </h6>
                                <ul>
                                    <p>
                                        Pundir Sudhir Kumar
                                    </p>
                                </ul>
                            </div>
                            <div>
                                <h6 class="text-success">
                                    <b>
                                        <i class="bi bi-pen-fill"></i>
                                    </b> Highlights
                                </h6>
                                <ul>
                                    
                                    <li>
                                        Language: English
                                    </li>
                                    <li>
                                        Binding: Paperback
                                    </li>
                                    <li>
                                        Publisher: CBS Publishers & Distributors Pvt Ltd, India
                                    </li>
                                    <li>
                                        Genre: Mathematics
                                    </li>
                                    <li>
                                        ISBN: 9789389396331, 9789389396331
                                    </li>
                                    <li>
                                        Edition: 8, 2007
                                    </li>
                                    <li>
                                        Pages: 560
                                    </li>
                                    
                                </ul>
                            </div>
                            <hr>
                            <div>
                                <h4 class="text-success">
                                    <b>
                                        Services
                                    </b> 
                                </h4>
                                <ul>
                                    <p><b> <i class="bi bi-arrow-clockwise text-success"></i> </b><a href="#" class="text-dark"> 7 Days Replacement Policy</a></p>
                                    <p><b> <i class="bi bi-coin text-success"></i> </b><a href="#" class="text-dark"> Cash on Delivery available</a></p>
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><hr>
        </div>

        <div class="container-fluid" style="margin-top: 50px;" >
            <div class=" bg-dark" style="margin-bottom: 5px;  position: relative; width: 100%; height: 100px; border-radius: 5px">
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
        <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            -->

        <!-- ****** this js to the buy button ****** -->
        <script>
            function buy(){
                window.location = "/maincollegeProject/buy.php"
            }
        </script>

        <script>
            var count = 0;
            function heartbtn(){
                
                if(count == 0){
                    document.getElementById("heart").className = " fa fa-heart text-danger";
                    count = 1;
                }
                else{
                    document.getElementById("heart").className = " fa fa-heart-o text-danger";
                    count = 0;
                }
                
            }
        </script>
        
    </body>

</html>
<!-- ****** Make by vineet krishna gupta ****** -->
<!-- ****** email - vineetkrishnagupta@gmail.com ****** -->
<!-- ****** phone - 6394512899 ****** -->