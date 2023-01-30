<?php

class Login extends Database
{

protected function getUser($email, $password){
    
    $query = "SELECT * FROM login_users WHERE email = ? AND password = ?";
    $conn = $this-> connect()->prepare($query);

    if(!$conn-> execute(array($email,$password))){
        $conn = null;
        header("location:../login.php?error=stmtFailed");
        exit();
    }

    if($conn-> rowCount() == 0){
        $conn = null;
        header("location:../login.php?error=userNotFound");
        exit();
    }

    $hashedpwd = $conn-> fetchAll(PDO::FETCH_ASSOC);
    $chechpwd = password_verify($password, $hashpwd[0]['password']);

    if($chechpwd == false){
        $conn = null;
        header("location:../login.php?error=userNotFound");
        exit();
    }elseif($chechpwd == true){
        $query = "SELECT * FROM login_users WHERE email = ? AND password = ?";
        $conn = $this-> connect()->prepare($query);

        if(!$conn-> execute(array($email,$password))){
            $conn = null;
            header("location:../login.php?error=stmtFailed");
            exit();
        }

        if($conn-> rowCount() == 0){
            $conn = null;
            header("location:../login.php?error=userNotFound");
            exit();
        }
        
        $user = $conn->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION['user'] = $user[0]['email'];

        $conn = null;
    }

}

}