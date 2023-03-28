<?php
     require_once('./Models/Connections.php');
     require_once('./Models/Model.php');
     class Post extends Model{
        public $table = 'posts';

        public function insert($data){
         $query = 'INSERT INTO `posts`(`name`,`description`,`thumbnail`,`category_id`) VALUES ("' .$data['name'] . '","' . $data['description'] .'","' . $data['thumbnail'] . '","' . $data['category_id'] . '")';

         return $this->conn->query($query);
     }
     public function find($id){
         $query = 'SELECT * FROM `posts` WHERE id = '.$id;
         $result = $this->conn->query($query);
         return $result->fetch_assoc();
     }
     // show id danh muc
     public function findByCategoryId($category_id){
        $query = 'SELECT * FROM `posts` WHERE category_id = '.$category_id;
        $result = $this->conn->query($query);
        $posts = [];
        // var_dump($result);
        // die();
        while($row = $result->fetch_assoc()){
            $posts[] = $row;
        }
        return $posts;

    }
    public function featured(){
        $query = 'SELECT * FROM `posts` WHERE noi_bat = 1 LIMIT 2';
        $result = $this->conn->query($query);
        return $this->conn->query($query);

    }
     public function update($data){
          $query = "UPDATE `posts` SET `name`='".$data['name'] ."',`description`='".$data['description'] ."', `thumbnail`='".$data['thumbnail'] ."', `category_id`='".$data['category_id'] ."' WHERE id = ".$data['id'];

          return $this->conn->query($query);
      }

      public function delete($id){
          $query = 'DELETE FROM `posts` WHERE id = ' . $id;

          return $this->conn->query($query);
      }

      public function details($id){
          $query = 'SELECT * FROM `posts` WHERE id = '.$id;
          $result = $this->conn->query($query);

          return $result->fetch_assoc();
      }      
     }
?>