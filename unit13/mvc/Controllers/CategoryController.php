<?php
 require_once('./Models/Category.php');
 class CategoryController{
    public function index(){
        $model = new Category();
        $categories = $model->getAll();
        // var_dump($categories);
     require_once('./Views/categories/list.php');
    }

    public function add(){
        require_once('./Views/categories/add.php');
      } 
     
     public function edit(){
       require_once('./Views/categories/edit.php');
    } 
 }
?>