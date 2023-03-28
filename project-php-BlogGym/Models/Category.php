<?php
    require_once('./Models/Connections.php');
    require_once('./Models/Model.php');
    class category{
        public $conn;
        function __construct(){
            $connection = new Connection();
            $this->conn = $connection->conn;
        }

        public function getAll(){
            $query = 'SELECT * FROM `categories`';

            $result = $this->conn->query($query);
            $categories = [];
            // var_dump($result);
            // die();
            while($row = $result->fetch_assoc()){
                $categories[] = $row;
            }

            return $categories;
        }

        // public function insert($data){
        //     $query = 'INSERT INTO `categories`(`parent_id`,`category_name`,`category_descripion`,`category_slug`,`category_thumbnail`,`category_created`) VALUES ("' .$data['parent_id'] . '","' . $data['category_name'] .'","' . $data['category_descripion'] . '","' . $data['category_slug'] .'","' . $data['category_thumbnail'] .'","' . $data['category_created'] .'")';

        //     return $this->conn->query($query);
        // }

        public function insert($data){
            $query = 'INSERT INTO `categories`(`category_name`) VALUES ("' .$data['category_name'] . '")';

            return $this->conn->query($query);
        }
        public function find($id){
            $query = 'SELECT * FROM `categories` WHERE id = '.$id;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        public function update($data){
            $query = "UPDATE `categories` SET `category_name`='".$data['category_name'] ."' WHERE id = ".$data['id'];

            return $this->conn->query($query);
        }

        public function delete($id){
            $query = 'DELETE FROM `categories` WHERE id = ' . $id;

            return $this->conn->query($query);
        }

        public function details($id){
            $query = 'SELECT * FROM `categories` WHERE id = '.$id;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

    }
?>