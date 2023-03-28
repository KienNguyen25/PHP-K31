<?php

     $name = "Kien Hoc Lap Trinh PHP";
//1 : Ham explode(chuỗi hoặc ký tự, chuỗi cần cắt);
//Sử dụng để cắt một chuỗi theo một ký tự hoặc chuỗi đặc biệt
//VD:
 $data = explode("Hoc",$name);
echo "<pre>";
 print_r($data);
echo "</pre>";

//2: Hàm implode(Ký tự muốn nối, mảng chuỗi muốn nối)
// sử dụng để nối chuỗi từ mảng ký tự
//VD:
 
$name = implode("Lại", $data);
echo "<br>".$name;

//3: Hàm strlen(chuỗi cần kiểm tra)
// sử để trả về độ dài của chuỗi
//VD: 
    
echo "<br>Độ dài của chuỗi là: ".strlen($name);

//4: Hàm str_word_count(chuỗi cần đếm)
//sử dụng để đếm số từ trong chuỗi
//VD:
echo "<br> Số từ trong chuỗi ' ".$name." ' là: ".str_word_count($name);

//5: Hàm str_repeat(chuỗi, số lần lặp)
//lập lại chuỗi theo số lần lặp nhất định
echo "<br>".str_repeat("<br>Học PHP",10);

//6: Hàm str_replace(chuỗi cũ, chuỗi mới, chuỗi muốn thay)
//dùng để thay thế chuỗi
//VD:
echo "<br><br> New: ".str_replace("PHP","Laravel",$name);

//7: Hàm băm dữ liệu md5 và sha1
//sử dụng để băm dữ liệu nhằm mục đích bảo mật
//VD:

//md5(chuỗi cần băm)
echo "<br>Hàm băm dữ liệu md5: ".md5('345234562');

//sha1(chuỗi cần băm)
echo "<br>Hàm băm dữ liệu sha1: ".sha1('123456');

//8: hàm substr và hàm strstr
// dùng dể cắt chuỗi con
//VD:

//substr(chuỗi, vị trí bắt đầu, vị trí kết thúc)
echo"<br>Cắt chuỗi con: ".substr($name,10,20);

//strstr(chuỗi, từ cần cắt)
echo "<br> Cắt chuỗi con: ".strstr($name,'Lại');

//9 Hàm strpos(chuỗi, từ muốn tìm)
//tìm vị trí của chuỗi con
//VD: 
echo "<br> TÌm vị trí của từ PHP: ".strpos($name, "PHP");
?>