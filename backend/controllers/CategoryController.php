<?php
require_once 'models/Category.php';
require_once 'controllers/Controller.php';

    class CategoryController extends Controller{
        public function index(){
            $this->page_title = 'Trang chủ';
            $this -> content =
                $this-> render('views/layouts/main3.php');
            
            require_once 'views/layouts/main.php';
        }
    }
?>