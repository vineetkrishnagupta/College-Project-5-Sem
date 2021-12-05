<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo"Loding..."."<br>";
        $value = $_GET['Search_Value'];
        $value = str_replace(' ', '', $value);
        $value = strtolower($value);
        if($value == ""){
            header("Location: /mainCollegeProject/welcome.php");
        }
        else if($value == "python" or $value == "pythonbook" or $value == "pythonprogramming"){
            header("Location: /mainCollegeProject/book4.php");
        }
        else if($value == "c++" or $value == "c&c++" or $value == "c&cpp" or $value == "cpp"){
            header("Location: /mainCollegeProject/book5.php");
        }
        else if($value == "html" or $value == "htmlandcss" or $value == "html&css" or $value == "htmlbook" or $value == "htmlcss"){
            header("Location: /mainCollegeProject/book1.php");
        }
        else if($value == "java" or $value == "javabook" or $value == "javaprogramming" or $value == "javaprogrammingbook"){
            header("Location: /mainCollegeProject/book7.php");
        }
        else{
            header("Location: /mainCollegeProject/notFoundPageForSearching.php");
        }
    }
    // Programming by vineet k. gupta(B.tect).
?>
<!-- ******** make by vineet krishna gupta ******** -->
<!-- ******** vineetkrishnagupta@gmail.com******** -->
<!-- ******** phone No - +91 63945-12899, +91 98397-60812 ******** -->