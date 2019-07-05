<?php

class Config {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "oop_practice";

    //create an initial variable/proraty for $conn
    public $conn; //use everwhere

    public function __construct(){
        //create the connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        //check the connection
        if($this->conn->connect_error){
            //stop the connection and show error message
            die("Connection error" . $this->conn->connect_error);
        }
        return $this->conn;
    }

}


?>