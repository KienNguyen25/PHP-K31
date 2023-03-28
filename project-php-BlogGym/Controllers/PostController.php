<?php
     require_once("./Models/Post.php");
    require_once("./Controllers/BaseController.php");
    class PostController extends BaseController {
            public function index()
            {
                $model = new Post();
                $posts = $model->getAll();
                $data['posts'] = $posts;
                // echo"<pre>";
                //     print_r($posts);
                // echo"</pre>";
                // require_once('./Views/Admin/post/list.php');
                 $this->view('Admin/post/list.php', $data);
            }

            // public function fitness(){
            //     $this->view('User/fitness/list.php');
            // }

            public function created(){
                require_once('./Views/Admin/post/created.php');
            // $this->view('Admin/post/created.php');
            }
            public function store(){
                $data = $_POST;
                $model = new Post();
                $status = $model->insert($data);
                header('location: index.php?mod=post&act=index');
            }
            public function edit(){
                $model = new Post();
                $id = isset($_GET['id'])?$_GET['id']:0;
                $data['post'] = $model->find($id);
                // var_dump($id,$category);
                // die();
                $this->view('Admin/post/update.php',  $data);
            }
    
            public function update(){
                $data = $_POST;
                $model = new Post();
                $status = $model->update($data);
                header('location: index.php?mod=post&act=index');
            }
            
            public function delete(){
                $model = new Post();
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                // var_dump($id);
                // die();
                $status = $model->delete($id);
                if($status == true){
                    header('location: index.php?mod=post&act=index');
                }
                header('location: index.php?mod=post&act=index');
            }
    
            public function details(){
                $model = new Post();
                $id = isset($_GET['id'])?$_GET['id']:0;
                $posts = $model->details($id);
                
                require_once "./Views/Admin/post/details.php";  
            }

            public function featured(){
                $model = new Post();
                $posts = $model->featured($data);
                $this->view('User/fitness/list.php', $data);

            }
            
    }
?>