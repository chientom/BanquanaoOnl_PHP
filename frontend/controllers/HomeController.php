<?php
    require_once 'models/Home.php';
    require_once 'controllers/Controller.php';

        class HomeController extends Controller{
            public function index(){
                $home_model = new Home();
                $homes = $home_model->showproduct();

                $this->page_title = 'Sản phẩm của chúng tôi';
                $this->content =
                    $this->render('views/categories/home/index.php',[
                        'homes' => $homes
                    ]);
                    require_once 'views/layout/main.php';
            }
        }
?>