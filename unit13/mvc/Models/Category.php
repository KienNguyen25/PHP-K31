<?php
    require_once("./Models/Connection.php");
    class Category {
        public $conn;
        function __construct(){
            $connection = new Connection();
            $this->conn = $connection->conn;
        }

        public function getAll(){
            $query = "SELECT * FROM categories";
            $result = $this->conn->query($query);

            $categories = array();
            
            While($row = $result->fetch_assoc()){
                  $categories[] = $row;
            }
         return $categories;
        }
    }

?>