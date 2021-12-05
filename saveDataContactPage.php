<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Comments = $_POST['comments'];

        echo "$Name <br>  $Comments <br> $Email <br> $Phone";

        if($Name == "" or $Email == "" or $Phone == "" or $Comments == ""){

            header("Location: /mainCollegeProject/notFillValueForContactPage.php");
            exit();

        }
        // <!-- how to connect and create Data base in php -->

        $severname = "localhost";
        $usename = "root";
        $password = "";
        $database = "mainCollegeProject";

        $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base

        if(!$coon){
            echo"<b>Sorry</b>";
            header("Location: /mainCollegeProject/notOkSaveContactPageData.php");
        }
        else{
            echo '<h6>Successfull connect</h6>';

            $sql = "CREATE TABLE `maincollegeproject`.`contact` ( `S.No` INT NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(50) NOT NULL ,  `Email` VARCHAR(30) NOT NULL ,  `Phone` VARCHAR(15) NOT NULL ,  `Comment` TEXT NOT NULL ,    PRIMARY KEY  (`S.No`)) ENGINE = InnoDB";

            $result = mysqli_query($coon,$sql);

            $sql = "INSERT INTO `maincollegeproject`.`contact` ( `Name`,  `Email`,  `Phone`, `Comment`) VALUES ( '$Name',   '$Email', '$Phone' ,' $Comments')";

            $result = mysqli_query($coon,$sql);

            if(!$result){
                echo"sorry! data is not save error is".mysqli_error($coon);
                header("Location: /mainCollegeProject/notOkSaveContactPageData.php");
      
            }
            else{
                echo"doon";
                header("Location: /mainCollegeProject/okSaveContactPageData.php");
            }
        }
    
        //<!-- make by vineet krishna gupta. -->
    }

?>