<?php 
   session_start();       // Khởi tạo session

   $_SESSION['isLogin'] = 1; // lưu isLogin có giá trị bằng 1

   $info = array();
   $info['ID'] = "001";
   $info['Name'] = "Nguyen Huu Kien";
   $info['Email'] = "nguyenhuukien2018@gmail.com";

   $_SESSION['info'] = $info;

   echo "<pre>";
       print_r($_SESSION);  // Xem toàn bộ SESSION đang được lưu 
   echo "</pre>";

  // lấy, in  ra giá trị của SESSION 
  echo "<br>". $_SESSION['info']['Name'];
  
  //Hủy SESSION
  unset($_SESSION['isLogin']);   //hủy $_SESSION['isLogin']
   echo "<pre>";
       print_r($_SESSION); 
   echo "</pre>";

   //Xóa toàn bộ SESSION đã lưu
  /* 
   session_start();

   session_destroy();
   */
    
   
?>