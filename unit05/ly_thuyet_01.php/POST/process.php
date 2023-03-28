<?php
//  $user = "";
//  $pass = "";
//  $name = "";

//  if(isset($_POST['user'])){
//      $user = $_POST['user'];
//  }

//   if(isset($_POST['psw'])){
//      $pass = $_POST['psw'];
//  }

//  if( $user == 'admin' && $pass == '123'){
//     echo "Đăng nhập thành công";
//  }else{
//     echo "Đăng nhập thất bại";
//  }

//  if(isset($_POST['name1'])){
//    $name = $_POST['name1'];
//    echo "<br>Họ và tên: ".$name;
//  }else{
//    echo "<br>Vui lòng điền đầy đủ thông tin !!";
//  }
$user = "";
$name = "";
$pass = "";

if(isset($_POST['user'])){
   $user = $_POST['user'];
}

if(isset($_POST['psw'])){
   $pass = $_POST['psw'];
}

if( $user == 'admin' && $pass == '123'){
    echo "<br> Dang nhap thanh cong!!";
}else{
    echo "Dang nhap that bai!!";
}

if(isset($_POST['name1'])){
    $name = $_POST['name1'];
    echo "<br> Ho va ten: ".$name;
}else{
   echo "<br>Vui long dien du thong tin!!";
} 


?>