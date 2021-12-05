<?php


    /* ******

        $fristName =  "<script>   document.write(localStorage.getItem('signupFristName'));  </script>" ;
        $lastName  =  "<script>   document.write(localStorage.getItem('signupLastName'));   </script>" ;
        $email     =  "<script>   document.write(localStorage.getItem('signupEmailId'));    </script>" ;
        $password  =  "<script>   document.write(localStorage.getItem('signupPassword'));   </script>" ;
        $phone     =  "<script>   document.write(localStorage.getItem('signupPhone'));      </script>";

    ****** */
    
   
     
    session_start();
    
    
    $fristName =  $_SESSION['FristName'];
    $lastName  =  $_SESSION['LastName'] ;  
    $email     =  $_SESSION['Email']    ; 
    $passwordMain  =  $_SESSION['Password']  ;
    $phone     =  $_SESSION['Phone']      ;

    echo "  $fristName<br> $lastName<br> $email <br> $passwordMain<br> $phone<br>  ";

    $severname = "localhost";
    $usename = "root";
    $password = "";
    $database = "mainCollegeProject";

    $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base
    if(!$coon){
        
        echo"<b>Sorry</b>".mysqli_connect_error();
    }
    else{
        echo '<h6>Successfull connect</h6>';

        $sql = "CREATE TABLE `maincollegeproject`.`user` ( `S.No` INT NOT NULL AUTO_INCREMENT ,  `Frist Name` VARCHAR(50) NOT NULL ,  `Last Name` VARCHAR(20) NOT NULL ,  `Email` VARCHAR(50) NOT NULL ,  `Password` VARCHAR(20) NOT NULL ,  `Phon No` VARCHAR(10) NOT NULL ,    PRIMARY KEY  (`S.No`)) ENGINE = InnoDB";
        
        $result = mysqli_query($coon,$sql);
       // require 'postmathord.php';

        $sql = "INSERT INTO `maincollegeproject`.`user` ( `Frist Name`, `Last Name`, `Email`, `Password`, `Phon No`) VALUES ( '$fristName', '$lastName', '$email', '$passwordMain', '$phone')";

        $result = mysqli_query($coon,$sql);

        if(!$result){
            echo"sorry! data is not save error is".mysqli_error($coon);
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();

            header("Location: /mainCollegeProject/fristPage.php");
  
        }
        else{
            echo"doon";
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();

            session_start();
            $_SESSION['FristName'] = "$fristName";
            $_SESSION['LastName']  = "$lastName";
            $_SESSION['Email']     = "$email";
            $_SESSION['Password']  = "$passwordMain";
            $_SESSION['Phone']     = "$phone";

        header("Location: /mainCollegeProject/fristPage.php");
        }
    }

    
?>