

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userr.php" mothod="GET" role="form">
          <legend>Thông tin người dùng</legend>
          <div class="form-group">
            <label for=""><b>Họ và tên</b></label>
            <input type="text" name="name">
            <input type="hidden" name="id" value="1234sdfg">
          </div>
          <div class="form-group">
            <label for=""><b>Password</b></label>
            <input type="password" name="pwd">
          </div>
          <div class="form-group">
            <label for=""><b>Giới tính</b></label>
            <input type="radio" name="sex" value="Nam">Nam
            <input type="radio" name="sex" value="Nữ">Nữ
            <input type="radio" name="sex" value="Khác">Khác
          </div>
          <div class="form-group">
           <input type="checkbox" name="ngon_ngu[]" value="PHP">PHP
           <input type="checkbox" name="ngon_ngu[]" value="PYTHON">PYTHON
           <input type="checkbox" name="ngon_ngu[]" value="JAVA">JAVA
           <input type="checkbox" name="ngon_ngu[]" value="C#">C#
          </div>
          <div class="form-group">
              <label for=""><b>Bạn đang sống ở đâu</b></label><br>
              <select name="city" id="city">
                  <option value="">Lựa chọn thành phố đang sống</option>
                  <option value="Hà Nội" selected="selected">Hà Nội</option>
                  <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                  <option value="Hải Dương">Hải Dương</option>
                  <option value="Thanh Hóa">Thanh Hóa</option>
                  <option value="Thái Bình">Thái Bình</option>
                  <option value="Long Biên">Long Biên</option>
                  <option value="Gia Lâm">Gia Lâm</option>
              </select>
          </div>
          <div class="form-group">
           <input type="checkbox" name="dieu_khoan" value="done"><b>Đã đọc điều khoản</b>
          </div>
          <div class="form-group">
            <label for=""><b>Giới thiệu</b></label><br>
            <textarea name="nhap" id="" cols="30" rows="10"></textarea>
          </div>
          <button type="submit">Submit</button>
    </form>
</body>
</html>