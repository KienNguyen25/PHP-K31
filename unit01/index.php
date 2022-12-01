<?php 
    function chan_le($number){
        if($number %2 == 0){
            echo $number."  là số chẵn";
        }else{
            echo $number."  là số lẻ";
        }
    };

    chan_le(33);


    function tong($x,$y){
       echo "<br> Tổng :".($x+$y);
    };
    tong(14,68);

    function tinh_tong($a,$b){
        return $a + $b;
    };

     echo "<br>".tinh_tong(3,5);
   
     // IN tất cả giá trị trong biến toàn cục $_GET
   echo "<pre>";
   print_r($_GET);
   echo "</pre>";

   // kiểm tra giá trị xem có tồn tại không
       if(isset($_GET['course'])){   // isset hàm kiểm tra giá trị có tồn tại không
        $course = $_GET['course'];      // in ra màn hình 
         echo "<br> Số là :".$course;
       }else{
        echo "<br> Không tìm thấy";
       }
?>