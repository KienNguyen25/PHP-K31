<?php
 require_once("./Models/Post.php");
 require_once("./Controllers/BaseController.php");
 class ShowController extends BaseController {
         public function home()
         {
            $model = new Post();
            $posts = $model->getAll();
            $model = new Category();
            $categories = $model->getAll();
             // echo"<pre>";
             //     print_r($posts);
             // echo"</pre>";
             require_once('./Views/User/home/list.php');
            //   $this->view('User/home/list.php');
         }
         
        //  public function details(){
        //     $model = new Post();
        //     $id = isset($_GET['id'])?$_GET['id']:0;
        //     $posts = $model->details($id);
            
        //     require_once "./Views/User/categories/details.php";  
        // }

        public function details(){
            $model = new Category();
            $categories = $model->getAll();
            $data['categories'] = $categories;
            $model = new Post();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $post = $model->details($id);
            
            require_once "./Views/User/home/details.php";  
            
        }  
        public function listPost(){
            $model = new Category();
            $categories = $model->getAll();
            $data['categories'] = $categories;
            $category_id =  isset($_GET['cat'])?$_GET['cat']:0;
            $model = new Post();
            $posts = $model->findByCategoryId($category_id);
            $data['posts'] = $posts;
            // var_dump( $posts);
            // die();
            // require_once('./Views/User/fitness/list.php');
            $this->view('User/fitness/list.php', $data);
            // $this->view('User/nutrition/list.php', $data);


        }
        public function nutrition(){
            $this->view('User/nutrition/list.php');

        }
        public function yoga(){
            $this->view('User/yoga/list.php');

        }
           
    }
?>