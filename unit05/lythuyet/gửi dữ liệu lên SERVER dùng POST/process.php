<?php
   $user = "";
   $pass = "";

   if(isset($_POST['user'])){
       $user = $_POST['user'];
   }
   
   if(isset($_POST['pwd'])){
    $pass = $_POST['pwd'];
}

   if($user == 'admin' && $pass == '123456'){
       echo 'đăng nhập thành công';
   }else {
    echo 'đăng nhập thất bại';
   }


   echo "<pre>";
       print_r($_POST);
   echo "</pre>";



?>