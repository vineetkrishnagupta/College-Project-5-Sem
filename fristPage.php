
<?php
 
    // Redirect browser
    session_start();
    if(isset($_SESSION['FristName'])){
        if(isset($_SESSION['Email'])){
            header("Location: /mainCollegeProject/welcome.php");
        
        }
        
    }
    else{
            
            session_start();

            session_unset();
            session_destroy();
            
            header("Location: /mainCollegeProject/notLogin.php");

    }
   
 ?>