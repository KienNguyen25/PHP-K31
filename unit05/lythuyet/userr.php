<?php  
   echo "<pre>";
       print_r($_GET);
    echo "</pre>";

    if(isset($_GET["sex"])){     //kiểm tra giá trị có tồn tại hay ko
       echo "<br> Giới tính :".$_GET["sex"];
    }else{
        echo "<br> Vui lòng xác nhận giới tính !!";
    }

    if(isset($_GET["dieu_khoan"])){
        echo "<br>Đã đọc đủ điều khoản ";
    }else{
        echo "<br> vui lòng xác nhận điều khoản !!";
    }

    if(isset($_GET["ngon_ngu"])){
        $ngon_ngu_arr = $_GET["ngon_ngu"];  //lấy giá trị từ "ngon_ngu"
        $ngon_ngu = "ngôn ngữ lập trình bạn biết :";  //in ra dữ liệu 
        foreach ($ngon_ngu_arr as $val) {
            $ngon_ngu .= $val .",";
        }
        echo "<br>".$ngon_ngu;
    }else{
        echo "<br> vui lòng xác nhận ngôn ngữ bạn biết!!";
    }

    echo "<br> Bạn đang sống ở: ".$_GET['city'];

?>
