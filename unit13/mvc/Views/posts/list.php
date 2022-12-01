<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- User ---</h3>
        <a href="#" class="btn btn-primary">Add New User</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Content</th>
                <th>View</th>
                <th style="width: 300px">Action</th>

            </thead>
            <?php foreach($posts as $post){?>
                <tr>
                    <td><?= $post['id']?></td>
                    <td><?= $post['title']?></td>
                    <td><?= $post['description']?></td>
                    <td><?= $post['thumbnail']?></td>
                    <td><?= $post['content']?></td>
                    <td><?= $post['view_count']?></td>
                    <td>
                        <a href="category_detail.php?id=<?=$cate['id']?>" class="btn btn-primary">Detail</a>
                        <a href="category_edit.php?id=<?=$cate['id']?>" class="btn btn-success">Edit</a>
                        <a href="category_delete.php?id=<?=$cate['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>
        </table>
    </div>
</body>
</html>