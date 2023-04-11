<?php
    require_once 'models/Model.php';
    require_once 'models/Product.php';
   
        class ProductController extends Controller{
            public function index(){

                // $product_model = new Product();
                // $product = $product_model->showproduct();
                $id = $_GET['id'];
                $single_model = new Product();
                $single = $single_model->getProductById($id);

                $this->page_title = 'Sản phẩm của chúng tôi';
                $this->content =
                    $this->render('views/categories/product/index.php',[
                        // 'products' => $product,
                        'single'=>$single
                    ]);
                    require_once 'views/layout/mainproduct.php';
            }
        }
?>