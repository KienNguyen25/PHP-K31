<?php
setcookie('tét','okok', time() + 60);
setcookie('php','lập trình php', time() + 5*60);

if(isset($_COOKIE['tét'])){
      echo "<br>".$_COOKIE['tét'];
}
if(isset($_COOKIE['php'])){
    echo "<br>".$_COOKIE['php'];
}
echo "<pre>";
   print_r($_COOKIE);
echo "</pre>";

?>