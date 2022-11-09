<?php
   require_once('connection.php'); 

   $id = (isset($_GET['id'])?$_GET['id']:0);

   $sql = "SELECT * FROM categories WHERE id = ".$id;
   
   $category = $conn->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tên danh mục: <?= $category['category_name'] ?></h1>
    <h2>Mô tả: <?= $category['category_description'] ?></h2>
</body>
</html>