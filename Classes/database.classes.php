<?php 

class Database
{

    protected function connect(){
          try {
            
            $username = 'root';
            $pwd = '';
            
            $pdo = new PDO('mysql:host=localhost;dbname=test', $username, $pwd);
            return $pdo;

          } catch (PDOException $e) {

            print "ERROR: ". $e-> getMessage() . '<br/>';
            die();
            
          }
    }
}