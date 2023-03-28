
<?php
    require_once "./Controllers/BaseController.php";
    require_once "./Controllers/UserController.php";
    class AuthController extends BaseController {
        public function login(){
            $this->view("/Admin/auth/login.php",[]);
        }
        public function handleLogin(){
            $user = new User();
            if($user->checkLogin($_POST['email'], $_POST['password'])){
                $this->redirect("index.php?mod=category&act=index");
            } else{
                $this->redirect("index.php?mod=auth&act=login");
            }
        }
    
        public function logout(){
            unset($_SESSION['auth']);      //xóa giá trị của phần tử có khóa là "auth" trong biến siêu toàn cục $_SESSION.
            $this->redirect("index.php?mod=auth&act=login");
        }
    }
?>