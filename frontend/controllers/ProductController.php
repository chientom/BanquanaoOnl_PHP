<?php
    require_once 'models/Model.php';
    require_once 'models/Product.php';
   
        class ProductController extends Controller{
            public function index(){


                $id = $_GET['id'];
                $single_model = new Product();
                $single = $single_model->getProductById($id);
                
                $this->page_title = $single['Ten'];;
                $this->content =
                    $this->render('views/categories/product/index.php',[
                        // 'products' => $product,
                        'single'=>$single,
                        'id'=>$id
                    ]);
                    require_once 'views/layout/mainproduct.php';
            }
            public function store(){
                $product_model = new Product();
                $product = $product_model->showproduct();

                $this->page_title = 'Sản phẩm của chúng tôi';
                $this->content =
                    $this->render('views/categories/home/index.php',[
                        'products' => $product,
                    ]);
                    require_once 'views/layout/main.php';
            }
        }
?>