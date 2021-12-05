<?php

    $userName = "";
    session_start();
    if(isset($_SESSION['FristName'])){
        $fName = $_SESSION['FristName']; 
        $lName = $_SESSION['LastName'];   
        $bn = "$fName[0]"."$lName[0]";
        $bn = strtoupper("$bn");
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/256/5266/5266953.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="/mainCollegeProject/myCSS.css">
        <title>Home page</title>
    </head>

    <body style="background-image: url(https://image.freepik.com/free-vector/gradient-white-monochrome-background_23-2149011361.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size:100% 100%">
        
    
        <div>
            <div style="border: 2px solid rgba(206, 28, 28, 0);">
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
                                    <a class="nav-link active text-success" aria-current="page" href="/mainCollegeProject/fristPage.php"><i class="bi bi-house-fill"></i> Home</a>
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
            <div class="container-fluid">

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    
                    <strong>Wellcome</strong> <?php echo"$fName";?>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            </div>

        
            
            <div style="border: 2px solid rgba(206, 28, 28, 0);">
                <div id="carouselExampleCaptions" class="carousel slide mx-2" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://source.unsplash.com/1000x400/?book" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style=" text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">We have, All Programing Book</h5>
                                <p  style=" text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">A book is a medium for recording information in the form of writing or images.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/1000x400/?book,red" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style=" text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">We have, All Programing Book</h5>
                                <p  style=" text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">A book is a medium for recording information in the form of writing or images.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/1000x400/?book,green" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style=" text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">We have, All Programing Book</h5>
                                <p  style=" text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">A book is a medium for recording information in the form of writing or images.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            


            <div class="container-fluid">
                <div>
                    <hr>
                    <marquee behavior="" direction="" width=""><h1>All Books for Programming </h1></marquee>
                    
                    <hr>
                </div>

                <div class="row">

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/jpu324w0/book/1/5/7/mastering-html-css-javascript-web-publishing-original-imafbyxqakn5nypa.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(4.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">29.6M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book1.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹300.00</button></a>
                                        <a href="/mainCollegeProject/book1.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjiwfbk0-0/book/0/v/b/how-to-solve-it-by-computer-original-imafz2y3ybxvfnwy.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(3.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">34.1M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book2.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹1,181.00</button></a>
                                        <a href="/mainCollegeProject/book2.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/book/2/3/3/data-structures-and-program-design-in-c-original-imadngnny3txz3ya.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(2.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">69.3M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book3.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹420.00</button></a>
                                        <a href="/mainCollegeProject/book3.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjd6nww0-0/book/f/y/a/python-programming-original-imafyxmnsfdfxmuq.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success"></span>
                                    <samp>(5.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">89.1M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book4.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹466.10</button></a>
                                        <a href="/mainCollegeProject/book4.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/ke0a7ww0/book/1/8/6/object-oriented-programming-with-c-8th-edition-original-imafusm7hh2bfazz.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(4.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">42.7M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book5.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹476.00</button></a>
                                        <a href="/mainCollegeProject/book5.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/ki96c280-0/book/f/n/w/c-in-depth-original-imafy3fzs2gb4wyx.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(3.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">12.6K</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book6.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹890.00</button></a>
                                        <a href="/mainCollegeProject/book6.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/jxf05u80/book/3/4/4/programming-with-java-original-imaffg6zgfy7wrc8.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(3.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">145.3k</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book7.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹433.00</button></a>
                                        <a href="/mainCollegeProject/book7.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjkbv680-0/book/i/0/y/programming-in-c-original-imafz3gvzaw4sc5h.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(2.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">212.6k</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book8.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹425.00</button></a>
                                        <a href="/mainCollegeProject/book8.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/j4irlow0/book/1/7/3/python-programming-original-imaeveypmqwygthb.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success"></span>
                                    <samp>(5.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">79.6M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book9.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹127.00</button></a>
                                        <a href="/mainCollegeProject/book9.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjd6nww0-0/book/i/g/n/objective-computer-awareness-original-imafyxsaknj277jh.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success"></span>
                                    <samp>(5.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">56.2M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book10.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹476.00</button></a>
                                        <a href="/mainCollegeProject/book10.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/k52s58w0/book/3/3/1/linear-programming-with-game-theory-original-imafnujqzcezqf8f.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(1.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">19.6M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book11.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹523.00</button></a>
                                        <a href="/mainCollegeProject/book11.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjbr8280-0/book/v/k/o/object-oriented-programming-using-c-and-java-original-imafyxef7v5umpjv.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(3.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">929.1K</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book12.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹430.00</button></a>
                                        <a href="/mainCollegeProject/book12.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjabs7k0-0/book/i/f/p/java-the-complete-reference-original-imafyw4gdrbxgrwt.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <samp>(2.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">239.6M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book13.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹695.00</button></a>
                                        <a href="/mainCollegeProject/book13.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjkbv680-0/book/6/z/v/computer-fundamentals-and-programming-in-c-original-imafz3gxu335vzfh.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(4.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">49.3M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book14.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹563.00</button></a>
                                        <a href="/mainCollegeProject/book14.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kj0bp8w0-0/book/l/r/j/python-original-imafyze2gt4cc6dq.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <samp>(2.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">429.6K</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book15.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹391.00</button></a>
                                        <a href="/mainCollegeProject/book15.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kfeamq80/book/6/8/6/let-us-c-authentic-guide-to-c-programming-language-17th-edition-original-imafvuwpkhggtfyh.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success"></span>
                                    <samp>(5.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">35.1M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book16.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹1,052.00</button></a>
                                        <a href="/mainCollegeProject/book16.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjd6nww0-0/book/n/z/j/software-engineering-original-imafyxumkqjp8yhz.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <samp>(2.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">239.6K</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book17.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹300.00</button></a>
                                        <a href="/mainCollegeProject/book17.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjabs7k0-0/book/z/c/8/c-the-complete-reference-original-imafyw4sxdj6hkhu.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(1.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">12.1M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book18.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹752.00</button></a>
                                        <a href="/mainCollegeProject/book18.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjiwfbk0-0/book/k/g/x/programming-in-c-original-imafz2ynafwf6x52.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <samp>(2.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">9.6M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book19.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹420.00</button></a>
                                        <a href="/mainCollegeProject/book19.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjabs7k0-0/book/0/y/g/data-structures-using-c-original-imafyw5gqkxzm5rh.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star"></span>
                                    <samp>(4.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">421.4M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book20.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹482.00</button></a>
                                        <a href="/mainCollegeProject/book20.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-2 my-2" style="height: auto;">
                        <div>

                            <div style="  border-radius: 5px; margin:1px; padding: 1px;">
                                <center>
                                    <img src="https://rukminim1.flixcart.com/image/612/612/kjd6nww0-0/book/w/y/l/data-structures-using-c-and-c-original-imafyxmzupucvd8b.jpeg?q=70"
                                        title="Data science" style="width: 100%;">
                                </center>
                            </div>

                            <div style="height:auto;">

                                <div style="height: auto;margin: 1px 1px 1px 5px; ">

                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success "></span>
                                    <span class="fa fa-star text-success"></span>
                                    <span class="fa fa-star text-success"></span>
                                    <samp>(5.0)</samp>

                                    <i class="fa fa-heart-o text-danger" style="margin-left: 5px;">10.6M</i>

                                </div>
                                <center>
                                    <div style="margin: 1px 1px 2px 1px;">

                                        <a href="/mainCollegeProject/book21.php"><button class="btn btn-success"
                                                style="border: none; border-radius: 2px; height: 60px; width: 65%; color: rgb(39, 35, 35);  background-color: rgb(214, 206, 206); text-align: center; font: 100% Arial, sans-serif;">₹890.00</button></a>
                                        <a href="/mainCollegeProject/book21.php"><button class="btn btn-success"
                                                style="border: none; font-size: 100%; border-radius: 2px; height: 60px; width: 32%; text-align: center;">Buy</button></a>

                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

            </div>

            <div class="container-fluid" style="margin-top: 50px;" >
                <div class=" bg-dark" style="margin-bottom: 5px;  position: relative; width: 100%; height: 100px; border-radius:5px;">
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



        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    </body>

</html>