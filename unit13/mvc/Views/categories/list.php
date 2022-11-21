<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h3 class="text-center">-----CATEGORIES-----</h3>
    <a href="index.php?mod=category&act=add" class="btn btn-primary">Add New Category</a><br><br>
    <table class="table">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Thumbnail</th>
        <th>Description</th>
        <th>Action</th>
      </thead>
      <?php foreach($categories as $cate){ ?>
      <tr>
        <td><?= $cate['id'] ?></td>
        <td><?= $cate['category_name'] ?></td>
        <td>
          <img src="<?= $cate['category_thumbnail'] ?>" width="150px" alt="">
        </td>
        <td><?= $cate['category_slug'] ?></td>
        <td>
          <a href="category_detail.php?id=<?= $cate['id'] ?>" class="btn btn-primary">Detail</a>
          <a href="category_edit.php?id=<?= $cate['id'] ?>" class="btn btn-success">Edit</a>
          <a href="category_delete.php?id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>