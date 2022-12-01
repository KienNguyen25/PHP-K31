<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h4>Upload ảnh đại diện</h4>
        <form action="upload.php" method="POST" role="form" enctype="multipart/form-data">
         <p>Chọn ảnh đại diện</p>
         <input type="file" name="avatar"><br>
        <button type="submit" class="btn btn-primary" name="btn_login"> Upload</button>
        </form>
    </div>
</body>
</html>