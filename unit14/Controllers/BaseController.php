<?php
 require_once("./Models/Category.php");
 require_once("./Controllers/BaseController.php");
    class BaseController{
        public function redirect($url){
            header("location: ". $url);
        }

        public function view($path, $data=[]){
            extract($data);
            require_once("./Views/". $path);
        }
    }
?>