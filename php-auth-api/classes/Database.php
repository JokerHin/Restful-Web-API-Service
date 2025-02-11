<?php
class Database{
    
    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE CONFIGURATION
    private $db_host = 'localhost';
    private $db_name = 'php_auth_api';
    private $db_username = 'root';
    private $db_password = 'Kar@050506'; //if password is available for your MySQL db specify here
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}