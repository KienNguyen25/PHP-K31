<?php

// Phương thức GET dùng để gửi dữ liệu từ client lên sever
  echo "<pre>";
     print_r($_GET);
  echo "</pre>";

if(isset($_GET['name'])){     // kiểm tra url có key 'name' hay không
    $names = $_GET['name'];
    echo "Họ tên: ".$names;
}else{
    echo "value không tồn tại!";
}



?>