<?php


class Logincontroller extends Login
{

    private $emailaddress;
    private $password;

    public function __construct($email, $password){

        $this-> emailaddress = $email;
        $this-> password = $password;
    }

    public function loginUser(){
        $result;

        if($this->emptyInputCheck() == false){
            header("location:../login.php?error=emptyFields");
            exit();
        }

        if($this->invalidEmail() == false){
            header("location:../login.php?error=invaalidEmail");
            exit();
        }

        $this-> getUser($this-> emailaddress, $this-> password);
        
    }

    private function emptyInputCheck(){
        $result;

        if(empty($this->emailaddress) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function invalidEmail(){
        $result;

        if(!filter_var($this->emailaddress, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }


}