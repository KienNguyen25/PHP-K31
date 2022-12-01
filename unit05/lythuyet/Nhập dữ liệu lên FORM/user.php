<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="process.php" method="POST" role="form">
            <legend>Đăng nhập vào kho hàng</legend>
            <div class="form-group">
                <label for="">Tên đăng nhập</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="user">
            </div>

            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="pwd">
            </div>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="ten">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio" name="sex" value="Nam">Nam
                <input type="radio" name="sex" value="Nữ">Nữ
                <input type="radio" name="sex" value="Khác">Khác
            </div>
            <div class="form-group">
                <label for="">Giới thiệu</label><br>
                <textarea name="intro" id="" cols="150" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for=""><b>Ngôn ngữ bạn đã học: </b></label><br>
                <input type="checkbox" name="lang[]" value="PHP">PHP
                <input type="checkbox" name="lang[]" value="PYTHON">PYTHON
                <input type="checkbox" name="lang[]" value="JAVA">JAVA
                <input type="checkbox" name="lang[]" value="C++">C++
                <input type="checkbox" name="lang[]" value="C#">C#
            </div>
            <div class="form-group">
                <label for="">Nơi ở</label><br>
                <select name="city" id="" class="form-control">
                   <option value="Hà Nội" selected="selected">Thành Phố bạn đang sống</option>
                   <option value="Hà Nội">Hà Nội</option>
                   <option value="TP.HCM">TP.HCM</option>
                   <option value="Hải Phòng">Hải Phòng</option>
                   <option value="Long Biên">Long Biên</option>
                   <option value="Gia Lâm">Gia Lâm</option>
                   <option value="Thanh Hóa">Thanh Hóa</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">Tôi đã đọc điều khoản</label>
                <input type="checkbox" name="check">
            </div>


            <button type="submit" class="btn btn-primary" name="btn_login">Đăng nhập</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>