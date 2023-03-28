
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
         <!-- Custom styles for this template -->
    <link rel="stylesheet" href="./assets/User/styles.css">
    <!-- Animate styles for this template -->
    <link href="./assets/User/css/animate.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="./assets/User/css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="./assets/User/css/colors.css" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="./assets/User/css/versionn/marketing.css" rel="stylesheet">

    </head>
    <style>
        textarea{
            width: 100%;
        }
        .container{
            padding: 0 200px;
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
                        <br>
    <a href="index.php?mod=post&act=index" class="btn btn-success">Exit</a><br><br>                                        
    <h2>Thumbail: </h2>
        <img src="<?= $posts['thumbnail']?>" width="100%" height="100%">
    <h1>Tiêu đề: <?= $posts['name'] ?></h1>
    <h2>Mô tả: <?= $posts['description'] ?></h2>
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




