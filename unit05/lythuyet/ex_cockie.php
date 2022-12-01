<?php 
   setcookie('msg','Đăng nhập thành công', time() + 5*60);

   //hủy cockie 
   /*setcookie('msg','Đăng nhập thành công', time() - 5*60);*/


   if(isset($_COOKIE['msg'])){
       echo "<br>".$_COOKIE['msg'];
   };

   echo "<pre>";
       print_r($_COOKIE);
   echo "</pre>";

?>