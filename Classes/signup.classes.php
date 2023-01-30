<?php

class Signup extends Database
{

protected function setUser($fullname,$email, $password){
    
    $query = "INSERT INTO login_users(fullname, email,password) VALUES(?,?,?)";
    $conn = $this-> connect()->prepare($query);

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    if(!$conn-> execute(array($fullname,$email,$hashedpwd))){
        $conn = null;
        header("location:../login.php?error=stmtFailed");
        exit();
    }

}
    
protected function checkUser($fullname,$email){
    
    $query = "SELECT * FROM login_users WHERE fullname = ? AND email = ?";
    $conn = $this-> connect()->prepare($query);

    if(!$conn-> execute(array($fullname,$email))){
        $conn = null;
        header("location:../login.php?error=stmtFailed");
        exit();
    }

    $resultCheck;
    if($conn->rowCount() > 0){
        $resultCheck = false;

    }else{
        $resultCheck = true; 

    }
    return $resultCheck;
}

}