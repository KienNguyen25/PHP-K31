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
    <h2>Thumbail: <img src="<?= $category['category_thumbnail']?>" width="200px" height="200px"></h2>
</body>
</html>