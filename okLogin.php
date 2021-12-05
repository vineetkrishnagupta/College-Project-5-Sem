<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $severname = "localhost";
    $usename = "root";
    $password = "";
    $database = "mainCollegeProject";

    $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base
    if(!$coon){
        
        echo"<b>Sorry</b>".mysqli_connect_error();

        session_start();
                // remove all session variables
        session_unset();
                // destroy the session
        session_destroy();
        header("Location: /mainCollegeProject/fristPage.php");
    }
    else{
        echo '<h6>Successfull connect</h6>';

        $sql = "CREATE TABLE `maincollegeproject`.`user` ( `S.No` INT NOT NULL AUTO_INCREMENT ,  `Frist Name` VARCHAR(50) NOT NULL ,  `Last Name` VARCHAR(20) NOT NULL ,  `Email` VARCHAR(50) NOT NULL ,  `Password` VARCHAR(20) NOT NULL ,  `Phon No` VARCHAR(10) NOT NULL ,    PRIMARY KEY  (`S.No`)) ENGINE = InnoDB";
        
        $result = mysqli_query($coon,$sql);
       // require 'postmathord.php';

        // $sql = "INSERT INTO `maincollegeproject`.`user` ( `Frist Name`, `Last Name`, `Email`, `Password`, `Phon No`) VALUES ( '$fristName', '$lastName', '$email', '$passwordMain', '$phone')";
        $sql = "SELECT * FROM `user` where `Email`='$loginEmail' and `Password`='$loginPassword'";

        $result = mysqli_query($coon,$sql);

        if(!$result){
            //echo"sorry! data is not save error is".mysqli_error($coon);
            // remove all session variables
            //session_unset();

            // destroy the session
            //session_destroy();

            //header("Location: /mainCollegeProject/fristPage.php");

            session_start();
                // remove all session variables
            session_unset();
                // destroy the session
            session_destroy();
            header("Location: /mainCollegeProject/fristPage.php");
  
        }
        else{
            echo"doon";
            $no = mysqli_num_rows($result);
            if($no >= 1){
                $row = mysqli_fetch_assoc($result);
            

                session_start();
                $_SESSION['FristName'] = $row['Frist Name'];
                $_SESSION['LastName']  = $row['Last Name'];
                $_SESSION['Email']     = $row['Email'];
                $_SESSION['Password']  = $row['Password'];
                $_SESSION['Phone']     = $row['Phon No'];

                header("Location: /mainCollegeProject/fristPage.php");
            }
            else{

                session_start();

                // remove all session variables
                session_unset();

                // destroy the session
                session_destroy();

                header("Location: /mainCollegeProject/notOkLogin.php");
            }
 
        }
    }
   
}
else{
    session_start();
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    header("Location: /mainCollegeProject/fristPage.php");
}

?>