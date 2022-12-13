<?php
    require_once("./Models/Category.php");
    require_once "./Controllers/BaseController.php";
    class AdminController extends BaseController {
        public function index(){
            $model = new Category();
            $categories = $model->getAll();
            // echo"<pre>";
            //     print_r($categories);
            // echo"</pre>";
            // require_once('./views/categories/list.php');
            $data['categories'] = $categories;
            // var_dump($data);
            // die();
            $this->view('Admin/categories/list.php', $data);
        }
        public function created(){
            $this->view('Admin/categories/created.php');
        }

        public function store(){
            $data = $_POST;
            $model = new Category();
            $status = $model->insert($data);
            header('location: index.php?mod=Admin&act=index');
        }
  
    
            public function update(){
                $data = $_POST;
                $model = new Category();
                $status = $model->update($data);
                header('location: index.php?mod=admin&act=index');
            }
            
            // public function details(){
            //     $model = new Category();
            //     $id = isset($_GET['id'])?$_GET['id']:0;
            //     $category = $model->details($id);
                
            //     require_once "./Views/Admin/categories/details.php";  
            // }
            // public function delete(){
            //     $model = new Category();
            //     $id = isset($_GET['id']) ? $_GET['id'] : 0;
            //     $status = $model->delete($id);
            //     if($status == true){
            //         header('location: index.php?mod=admin&act=index');
            //     }
            //     header('location: index.php?mod=admin&act=index');
            // }
        // public function update(){
        //     $this->view('Admin/categories/update.php');
        // }
    }

