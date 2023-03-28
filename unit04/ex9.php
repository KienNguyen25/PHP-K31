<?php
function kiem_tra_chan_le($number){
   if($number %2==0){
      echo"<br>".$number." là số chẵn";
   }else{
      echo"<br>".$number." là số lẻ";
   }
}
   kiem_tra_chan_le(50);

   //Hàm có 2 giá trị
   function tinh_tong($a,$b){
      $c = $a + $b;
      echo "<br>Kết quả ".$a." + ".$b." = ".$c;
   }
   tinh_tong(5,8);

   //Hàm có 3 giá trị
   function sum($number1,$number2,$number3 = FALSE){
      $sum = $number1 + $number2;
      if( $number3 != FALSE){
           $sum += $number3;
      }
      echo "<br>Tổng: ".$sum;
   }
   sum(3,5);
?>