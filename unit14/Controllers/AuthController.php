<?php
    require_once("./Controllers/BaseController.php");

class AuthController extends BaseController{
    public function login(){
        $this->view('/auth/login.php');
    }
    public function handleLogin(){
        var_dump($_POST);
    
    }

}

?>