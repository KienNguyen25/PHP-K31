<?php
     require_once("./models/Post.php");
    class PostController{
            public function index()
            {
                $model = new post();
                $posts = $model->getAll();
                // echo"<pre>";
                //     print_r($categories);
                // echo"</pre>";
                require_once('./views/posts/list.php');
            }
    }

?>