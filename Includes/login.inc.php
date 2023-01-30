<?php

if(isset($_POST['submit']))
{
    //Grabbing data

    $email = $_POST['email'];
    $password = $_POST['password'];

    //Instantiating signup controller
    include_once('../Classes/database.classes.php');
    include_once ('../Classes/login.classes.php');
    include_once('../Classes/loginContr.classes.php');

    $login = new Logincontroller($email, $password);

    //running error handlers and user signup

    $login-> loginUser();

    //going back to front page

    header('location:../index.php?error=none');
        
}