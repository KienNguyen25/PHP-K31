<?php
    class connection{
        var $conn;
        
        function __construct(){
            $severname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gymlife-php";
            $this->conn = new mysqli($severname, $username, $password, $dbname);
            $this -> conn -> set_charset('utf8');
            if($this->conn->connect_error){
                die('connect failed: '.$this->conn->connect_error);
            }
        }
    }
?>