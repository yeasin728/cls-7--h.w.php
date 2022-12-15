<?php

session_start();

if(isset($_POST["creat"])){
    $FirstName = $_POST["fn"];
    $LastName = $_POST["ln"];
    $Date_of_birth = $_POST["db"];
    $username = $_POST["un"];
    $password= $_POST["pd"];
    $ConfirmPassowrd = $_POST["cd"];
    $errors_array =[];
   
    if(empty($FirstName)){
        $errors_array['fn'] = "please enter your first name.";
    }

    if(empty($LastName)){
        $errors_array['ln'] = "please enter your last name.";
    }

    if(empty($Date_of_birth)){
        $errors_array['db'] = "please enter your date of birth.";
    }

    if(empty($username)){
        $errors_array['un'] = "please enter your username.";
    }

    if(empty($password)){
        $errors_array['pd'] = "please enter password.";
        
    }
    
    if(empty($ConfirmPassowrd)){
        $errors_array['cd'] = "please confirm your password";
    }

    #password validation 
    if($password != $ConfirmPassowrd){                          
        $errors_array["dm"] = "your password did not match";
    }

    if(count($errors_array) > 0){

        $_SESSION["errors"] = $errors_array;
        $_SESSION["old data"] = $_POST;
        header("Location: ../index.php");
    } else {
        echo "your account is created!";
    }
    
} else{
    echo "please press creat button"; 
}
    






?>