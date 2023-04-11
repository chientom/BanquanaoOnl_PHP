<?php
require_once 'models/Khachhang.php';
require_once 'controllers/Controller.php';

    class KhachhangController extends Controller{
        public function index(){
            // Controller gọi Model
            $khachhang_model = new Khachhang();
            $khachhang = $khachhang_model->getAll();

            // Controller gọi View
            $this->page_title ='Danh sách khách hàng';
            $this->content =
                $this->render('views/categories/khachhang/index.php',[
                    'khachhang' => $khachhang
                ]);
            require_once 'views/layouts/khachhang.php';
        }
    }
?>