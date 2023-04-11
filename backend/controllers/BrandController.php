<?php
require_once 'models/Brand.php';
require_once 'controllers/Controller.php';

    class BrandController extends Controller{
        public function index() {

            // Controller gọi Model
            $brand_model = new Brand();
            $brands = $brand_model->getAll();

            // Controller gọi View
            $this->page_title ='Danh sách thương hiệu';
            $this->content =
                $this->render('views/categories/brand/index.php',[
                    'brands' => $brands
                ]);
            require_once 'views/layouts/brand.php';

        }

        public function create() {
            $error = '';
            $result = '';
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            // die();
            if(isset($_POST['create'])){
                // b4:
                $brand = $_POST['name'];
                if(empty($brand)){
                    $this->error = 'Phải nhập vào tên thương hiệu';
                }
                //b5
                if(empty($this->error)){
                    // Controller gọi model để insert vào csdl
                    $brand_model = new Brand();
                    $is_insert = $brand_model->insertData($brand);
                    // var_dump($is_insert);
                    if($is_insert){
                        $_SESSION['success']='Thêm thành công';
                        header('Location:index.php?controller=brand&action=index');
                    }
                    
                }
            }
            // Controller gọi View để hiển thị giao diện
            $this->page_title = 'Thêm thương hiệu';
            $this-> content =
                $this->render('views\categories\brand\create.php');
                
            require_once 'views/layouts/brand.php';
        }
    }
?>