<!-- How to send Email in php  -->
<?php


    $to_email = $signupEmail;
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $header .= "From:My Flipkart";
   
    $subject = "Hello, otp verification";// title
    $otp = random_int(100000,999999);
   
    $body = '<img src="https://static.thenounproject.com/png/3046859-200.png" alt=""><h3><b>Hi, sir Your OTP is 👉</b></h3><h1><b>'.$otp.'</b></h1>';
   
    if (mail($to_email, $subject, $body, $header)) {
        //echo "Email successfully sent to <b>$to_email</b><br>";
    } 
    
    else {
        echo "😧Email sending failed...";
    }
    //echo $otp." 🙂 ";


?>
<!-- Make by Vineet Krishna Gupta -->