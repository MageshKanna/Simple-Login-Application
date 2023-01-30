<?php

if(isset($_POST['submit']))
{
    //Grabbing data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Instantiating signup controller
    include_once('../Classes/database.classes.php');
    include_once ('../Classes/signup.classes.php');
    include_once('../Classes/signupContr.classes.php');

    $signup = new Signupcontroller($fullname, $email, $password);

    //running error handlers and user signup

    $signup-> signUpUser();

    //going back to front page

    header('location:../index.php?error=none');
        
}