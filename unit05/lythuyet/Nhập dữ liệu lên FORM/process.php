<?php
 //login && password
   if (isset($_POST['user'])){
         $user = $_POST['user'];
   }
   if (isset($_POST['pwd'])){
    $pass = $_POST['pwd'];
  }
  if( $user == 'admin' && $pass == '123456'){
      echo "Đăng nhập thành công!!";
  }else {
    echo "Đăng nhập thất bại!!";
  }
// họ và tên
  //  $full_name = "";

   if(isset($_POST['ten'])){
      $full_name = $_POST['ten'];
      echo "<br> Họ và tên: ".$_POST['ten'];
   }else{
    echo "<br>Bạn cần điền đủ thông tin!!";
  }


  //Giới tính
  if(isset($_POST['sex'])){
     echo "<br>Giới tính: ".$_POST['sex'];
  }else{
    echo "<br> Vui lòng xác nhận giới tính!!";
  }
  //Giới thiệu
  $gioi_thieu = "";
  if(isset($_POST['intro'])){
     $gioi_thieu = $_POST['intro'];
     echo "<br>Giới Thiệu: ".$gioi_thieu;
  }else{
    echo "<br>Bạn cần điền đủ thông tin Giới Thiệu!!";
  }
  
  //ngon ngu
  if(isset($_POST['lang'])){
    $ngon_ngu_arr = $_POST['lang'];
    $ngon_ngu = "Ngôn ngữ lập trình bạn biết: ";
    foreach($ngon_ngu_arr as $val){
        $ngon_ngu .= $val .",";
    }
    echo "<br>".$ngon_ngu;
  }

  echo "<br>Bạn đang sống ở: ".$_POST['city'];

  if(isset($_POST['check'])){
      $check_box = $_POST['check'];
      echo "<br> Tôi đã đọc hết điều khoản";
  }else{
    echo "<br> Vui lòng đọc hết điều khoản!!";
  }


// echo "<pre>";
//   print_r($_POST);
// echo "</pre>";


?>