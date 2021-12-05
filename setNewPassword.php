<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

         
        $mainPassword = $_POST['password'];
        $ConfirmPassword = $_POST['confirmpassword'];

        session_start();

         
        $Email = $_SESSION['Email'];

        echo"$mainPassword $Email";
         

        //echo "$signupFristName <br>  $signupLastName <br> $signupEmail <br> $singupPhone";


        /*** send otp file ***/
         


        /*** connect and create Data base ***/
        //include 'connectionInSQL.php';


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
        else
        {
            echo '<h6>Successfull connect</h6>';
            $sql = "UPDATE `user` SET `Password` = '$mainPassword' WHERE `Email` = '$Email'";
            $result = mysqli_query($coon,$sql);
            if($result)
            {
                echo "ok";
                $sql = "SELECT * FROM `user` where `Email`='$Email' and `Password`='$mainPassword'";

                $result = mysqli_query($coon,$sql);

                if(!$result)
                {
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
                else
                {
                    echo"doon";
                    $no = mysqli_num_rows($result);
                    if($no >= 1)
                    {
                        $row = mysqli_fetch_assoc($result);
                    
        
                        
                        $_SESSION['FristName'] = $row['Frist Name'];
                        $_SESSION['LastName']  = $row['Last Name'];
                        $_SESSION['Email']     = $row['Email'];
                        $_SESSION['Password']  = $row['Password'];
                        $_SESSION['Phone']     = $row['Phon No'];
        
                        header("Location: /mainCollegeProject/fristPage.php");
                    }
                    else
                    {
        
                        session_start();
                        // remove all session variables
                        session_unset();
                        // destroy the session
                        session_destroy();

                        session_start();

                        $_SESSION['Email'] = $Email;
                        header("Location: /mainCollegeProject/notFoundEmailForForgetPassword.php");
                    }
                }
            }
            else
            {
                session_start();
                    // remove all session variables
                session_unset();
                    // destroy the session
                session_destroy();
                session_start();
                $_SESSION['Email'] = $Email;
                header("Location: /mainCollegeProject/notFoundEmailForForgetPassword.php");
            }
            
             
        }
         
    }
    else
    {

        session_start();
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();

        session_start();

        $_SESSION['Email'] = $Email;
        header("Location: /mainCollegeProject/notFoundEmailForForgetPassword.php");
    }
   
?>