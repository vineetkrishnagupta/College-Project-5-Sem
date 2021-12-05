<?php
 
    // Redirect browser
    session_start();
    if(isset($_SESSION['FristName'])){
        if(isset($_SESSION['Email'])){


            $bookid = $_SESSION['BookId'];
            $bookname = $_SESSION['BookName'];

            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $name = $_POST['buyName'];
                $email = $_POST['buyEmail'];
                $phone = $_POST['buyPhone'];

                $address = $_POST['buyAddress'];
                $pinCode = $_POST['pinCode'];

                $_SESSION['buyAddress'] = $address;
                $_SESSION['pinCode'] = $pinCode;

                $severname = "localhost";
                $usename = "root";
                $password = "";
                $database = "mainCollegeProject";

                $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base
                if(!$coon){
                    
                    echo"<b>Sorry</b>".mysqli_connect_error();
                    header("Location: /mainCollegeProject/notOkSaveDataBuy.php");
                }
                else{
                    echo '<h6>Successfull connect</h6>';

                    $sql = "CREATE TABLE `maincollegeproject`.`buy` ( `S.No` INT NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(50) NOT NULL ,  `Email` VARCHAR(50) NOT NULL , `Phon No` VARCHAR(10) NOT NULL ,  `Address` VARCHAR(100) NOT NULL , `Pincode` VARCHAR(10) NOT NULL, `Book Id` VARCHAR(10) NOT NULL ,`Book Name` VARCHAR(50) NOT NULL,  PRIMARY KEY  (`S.No`)) ENGINE = InnoDB";
                    $result = mysqli_query($coon,$sql);

                    $sql = "INSERT INTO `maincollegeproject`.`buy` ( `Name`, `Email`, `Phon No`, `Address`, `Pincode`, `Book Id`, `Book Name`) VALUES ( '$name', '$email', '$phone', '$address', '$pinCode', '$bookid', '$bookname')";

                    $result = mysqli_query($coon,$sql);

                    if(!$result){
                        
                        echo"not ok";
                        echo"".mysqli_error($coon);
                        header("Location: /mainCollegeProject/notOkSaveDataBuy.php");
                    }
                    else{
                        echo"doon";
                        header("Location: /mainCollegeProject/okSaveDataBuy.php");
                    }
                }
            }
            else{
                 
               header("Location: /mainCollegeProject/notOkSaveDataBuy.php");
            }
        }
        else{

            session_start();
            session_unset();
            session_destroy();
            
            header("Location: /mainCollegeProject/notLogin.php");

        }
        
    }
    else{
            
        session_start();
        session_unset();
        session_destroy();
        
        header("Location: /mainCollegeProject/notLogin.php");

    }
   
 ?>