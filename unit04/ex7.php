<?php
   $array_info = array();
   $array_info[0][0] = 10;
   $array_info[0][1] = 'Kien';
   $array_info[0][2] = 'PHP';

   $array_info[1][0] = 30;
   $array_info[1][1] = 'Hieu';
   $array_info[1][2] = array(40,'Long');

   echo "<pre>";
print_r($array_info);
   echo "</pre>";
  
   echo "<br>".$array_info[1][2][1];

//------------------------Mang 2 chieu ko tuan tu-----------------

$array_thongTin = array();
$array_thongTin[] = array(
    'ID' => 1,
    'Name' => 'Nguyen Huu Kien',
    'Email' => 'nguyenhuukien12@gmail.com',
    'Sdt' => '0376662880',
);

$array_thongTin[] = array(
    'ID' => 2,
    'Name' => 'Nguyen Minh Hieu',
    'Email' => 'nguyenminhhieu32@gmail.com',
    'Sdt' => '098327872',
);

$array_thongTin[] = array(
    'ID' => 3,
    'Name' => 'Nguyen Hoang Long',
    'Email' => 'nguyenhoanglong45@gmail.com',
    'Sdt' => '037976668',
);

echo "<pre>";
   print_r($array_thongTin);
echo "<pre>";

echo "Xin chao: ".$array_thongTin[0]['Name'];


foreach($array_thongTin as $key => $nhanvien){
    echo "<pre>";
  print_r($nhanvien);
echo "</pre>";

   echo "<br>Nhân Viên thứ: ".($key+1);
   echo "<br>Họ và tên: ".$nhanvien['Name'];
  echo"<br>Email: ".$nhanvien['Email'];
  echo"<br>Số điện thoại: ".$nhanvien['Sdt'];
}


?>