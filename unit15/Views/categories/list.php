<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="./assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="container sb-nav-fixed">
       
        <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="index.php?mod=category&act=create" class="btn btn-primary">Add New Category</a><br><br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>Description</th>
                <th>created_at</th>
                <th>Action</th>
            </thead>
            <?php foreach($categories as $cate){?>
                <tr>
                    <td><?= $cate['id']?></td>
                    <td><?= $cate['category_name']?></td>
                    <td>
                        <img src="<?= $cate['category_thumbnail']?>" width="100px" height="100px">
                    </td>
                    <td><?= $cate['category_slug']?></td>
                    <td><?= $cate['category_description']?></td>
                    <td><?= $cate['category_created_at']?></td>
                    <td>
                        <a href="index.php?mod=category&act=details&id=<?=$cate['id']?>" class="btn btn-primary">Detail</a>
                        <a href="index.php?mod=category&act=edit&id=<?=$cate['id']?>" class="btn btn-success">Edit</a>
                        <a href="index.php?mod=category&act=delete&id=<?=$cate['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>

    </body>
</html>
<!-- ---------------------------------- -->
