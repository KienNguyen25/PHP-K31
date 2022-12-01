<?php
 require_once('connection.php');

 $data = $_POST;

 $sql = "UPDATE categories SET category_name='".$data['name']."',category_slug='".$data['slug']."', category_thumbnail='".$data['thumb']."', category_description='".$data['description']."'WHERE id = ".$data['id'];

 $status = $conn->query($sql);

if($status == true){
   header('location: category.php');
}else{
    header('location: category_edit.php?id='.$data['id']);
}
?>