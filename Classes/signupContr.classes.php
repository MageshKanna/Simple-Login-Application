<?php 

class Signupcontroller extends Signup
{

    private $fullname;
    private $emailaddress;
    private $password;

    public function __construct($fullname, $email, $password){
        $this->fullname = $fullname;
        $this-> emailaddress = $email;
        $this-> password = $password;
    }

    public function signUpUser(){

        if($this->emptyInputCheck() == false){
            header("location:../login.php?error=emptyFields");
            exit();
        }

        if($this->invalidEmail() == false){
            header("location:../login.php?error=invaalidEmail");
            exit();
        }

        if($this->checkuserTaken() == false){
            header("location:../login.php?error=nosuchUser");
            exit();
        }

        $this-> setUser($this->fullname, $this-> emailaddress, $this-> password);
        
    }

    private function emptyInputCheck(){
        $result;

        if(empty($this->fullname) || empty($this->emailaddress) || empty($this->password)){
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

    private function checkuserTaken(){
        $result;

        if(!$this-> checkUser($this->fullname, $this->emailaddress)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

}