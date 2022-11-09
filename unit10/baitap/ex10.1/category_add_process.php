<?php
 require_once('connection.php');

 $data = $_POST;

 $sql = "INSERT INTO categories (category_name, category_slug, category_thumbnail, category_description) VALUES ('".$data['name']."','".$data['slug']."','".$data['add_thumb']."','".$data['details']."')";

 $status = $conn->query($sql);

if($status == true){
   header('location: category.php');
}else{
    header('location: category_add.php');
}
?>