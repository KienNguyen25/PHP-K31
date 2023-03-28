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
        <link href="./assets/Admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
        textarea{
            width: 100%;
        }
    </style>
    <body class="sb-nav-fixed">
        <?php include_once('Views/Admin/partials/header.php');  ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
             <?php include_once('Views/Admin/partials/sidebar.php'); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container">
                <h3 align="center">Add New Category</h3>
    <hr>
    <form action="index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
    <input type="hidden" id="" placeholder="" name="id" value="<?= $category['id'] ?? ''?>">
    <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_name" value="<?= $category['category_name'] ?? ''?>">
            </div>
            <div class="form-group">
                <label for="">Parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?= $category['parent_id'] ?? ''?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>
        </table>
            </div>
                </main>
            <?php include_once('Views/Admin/partials/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


