<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
          <form action="infomation_add.php" method="POST">
          <legend class="text-center"><b style="font-size: 30px">ZENT GROUP - PHP - Thực hành về gửi dữ liệu sử dụng POST</b></legend>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Họ và tên</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Nhập họ tên">
    </div>
    </div>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Giới tính</label>
    <div class="col-sm-10">
      <input type="radio" name="sex"value="Nam">Nam 
      <input type="radio" name="sex"value="Nữ">Nữ
      <input type="radio" name="sex"value="Khác">Khác
    </div>
    </div>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Ngày sinh</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="date">
    </div>
    </div>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Quê quán</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="que_quan" placeholder="Nhập quê quán">
    </div>
    </div>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Ngoại ngữ</label>
    <div class="col-sm-10">
      <input type="checkbox" name="lang[]" value="Tiếng Anh">Tiếng Anh
      <input type="checkbox" name="lang[]" value="Tiếng Nhật">Tiếng Nhật
      <input type="checkbox" name="lang[]" value="Tiếng Pháp">Tiếng Pháp
    </div>
    </div>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Example textarea</label>
    <textarea cols="130"rows="5" name="info_new"></textarea>
  </div>
  <div class="form-group row">
   <button class="border border-primary bg-primary text-center" type="submit">submit</button>
</div>
  
          </form>  
   </div>
   
</body>
</html> 

