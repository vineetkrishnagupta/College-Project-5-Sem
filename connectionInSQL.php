<!-- how to connect and create Data base in php -->
<?php
    $severname = "localhost";
    $usename = "root";
    $password = "";
    $database = "mainCollegeProject";

    $coon = mysqli_connect($severname, $usename, $password, $database); // connect data base
    if(!$coon){
        echo"<b>Sorry</b>";
    }
    else{
        echo '<h6>Successfull connect</h6>';
    }
?>
<!-- make by vineet krishna gupta. -->