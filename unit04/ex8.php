<?php
 // 1: ham` in_array(gia tri can kiem tra, ten mang)
 //VD:

 $name = array('Kien','Long','Hieu','Hoang');
 var_dump(in_array('Kien',$name));

 // 2: Ham` count(ten mang)
 // VD:

 echo "<br>Số lượng phần tử của mảng là: ".count($name);

 // 3: Ham` array_key_exists(key, ten mang)
 // Dùng để kiểm tra Key có trong mảng hay không
// VD:

$info = array(
    'Name' => 'Nguyen Huu Kien',
    'Date' => '25/04/2002',
    'Sex' => 'Nam',
    'Place' => 'Ha Noi',
);

echo "<pre>";
  print_r($info);
echo "<pre>";

if(array_key_exists('Name',$info)){
     echo "Họ và tên: ".$info['Name'];
}

// 4: Hàm array_search(gia tri, ten mang)
// Sử dùng để tìm kiếm phần tử có trong mảng hay không và trả về index của phần tử đó 
// VD:

 $language = array('PHP','JAVA','JS','Python','C','C#');

$index = array_search('Python', $language);

if($index !== FALSE){
   echo "<br>Vị trí phần tử là: " . $index;
}else{
    echo "Không tìm thấy phần tử!!";
}

// 5: Hàm array_count_values(Tên mảng)
// Đếm số lượng phần tử có trong mảng. Trả về 1 mảng với Key là giá trị mảng cũ, value là số làn xuất hiện
//VD: 
   $language = array('PHP','PHP','JAVA','C','JS','Python','C','C#');
   $array_result = array_count_values($language);
   
   echo"<pre>";
      print_r($array_result);
   echo"</pre>";

// 6:Hàm array_push(Tên mảng, Phần tử thêm vào mảng 1, phần tử thứ 2)
//Thêm vào cuối mảng các phần tử sau tên mảng
// VD:

  array_push($language,'C++','RUBY');

    echo"<pre>";
      print_r($language);
   echo"</pre>";

// 7: Hàm array_pop(tên mảng)
// Xóa đi phần tử cuối mảng và trả về phần tử bị xóa
// VD:
   
$value_delete = array_pop($language);
echo '<br>'. $value_delete;

//8: Hàm array_shift(Tên mảng)
//Xóa đi phần tử đầu mảng và trả về phần tử bị xóa
//VD: 
$value_delete1 = array_shift($language);
echo '<br>'. $value_delete1;


//9: Hàm array_unshift(Tên mảng,phần tử thêm vào mảng 1)
// Thêm vào các phần tử đầu mảng
//VD:

 array_unshift($language,'HTML','CSS');

 echo"<pre>";
 print_r($language);
echo"</pre>";

//10: Hàm unset(ten mang[vi tri])

unset($language[1]);

echo"<pre>";
print_r($language);
echo"</pre>";
?>