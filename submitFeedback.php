<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $Email = $_POST['email'];
        $Title = $_POST['title'];
        $Comments = $_POST['comments'];

        //echo "$Name <br>  $Comments <br> $Email <br> $Phone";

        if($Email == "")
        {

            header("Location: /mainCollegeProject/enterEmailForFeedback.php");
            exit();

        }
        // <!-- how to connect and create Data base in php -->

        $severname = "localhost";
        $usename = "root";
        $password = "";
        $database = "mainCollegeProject";

        $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base

        if(!$coon)
        {
            echo"<b>Sorry</b>";
            header("Location: /mainCollegeProject/notOkSaveDataFeedbackPage.php");
        }
        else
        {
            echo '<h6>Successfull connect</h6>';

            $sql = "CREATE TABLE `maincollegeproject`.`feedback` ( `S.No` INT NOT NULL AUTO_INCREMENT ,  `Email` VARCHAR(50) NOT NULL ,  `Title` VARCHAR(50) NOT NULL , `Comment` TEXT NOT NULL ,    PRIMARY KEY  (`S.No`)) ENGINE = InnoDB";

            $result = mysqli_query($coon,$sql);

            $sql = "INSERT INTO `maincollegeproject`.`feedback` ( `Email`, `Title`, `Comment`) VALUES ('$Email', '$Title', ' $Comments')";

            $result = mysqli_query($coon,$sql);

            if(!$result)
            {
                echo"sorry! data is not save error is".mysqli_error($coon);
                header("Location: /mainCollegeProject/notOkSaveDataFeedbackPage.php");
      
            }
            else
            {
                echo"doon";
                header("Location: /mainCollegeProject/okSaveDataFeedbackPage.php");
            }
        }
    
        //<!-- make by vineet krishna gupta. -->
    }
    else
    {
        header("Location: /mainCollegeProject/fristPage.php");
    }

?>