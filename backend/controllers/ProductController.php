<?php
require_once 'models/Product.php';
require_once 'controllers/Controller.php';
require_once 'controllers/BrandController.php';
require_once 'models/Brand.php';

    class ProductController extends Controller{
        // public function showbrand() {

        //     // Controller gọi Model
        //     $brand_model = new Brand();
        //     $brands = $brand_model->getAll();

        //     // Controller gọi View
        //     $this->page_title ='Danh sách thương hiệu';
        //     $this->content =
        //         $this->render('views/categories/product/create.php',[
        //             'brands' => $brands
        //         ]);
        //     require_once 'views/layouts/product.php';

        // }
        public function index(){
            // Controller gọi Model
    
            $product_model = new Product();
            $products = $product_model->getAll();


            // Controller gọi View
            $this->page_title ='Danh sách sản phẩm';
            $this->content =
                $this->render('views/categories/product/index.php',[
                    'products' => $products,
                   
                ]);
            require_once 'views/layouts/product.php';
        }

        public function create(){
            
            $brand_model = new Brand();
            $brands = $brand_model->showIn();
            // echo '<pre>';
            // print_r($_POST);
            // print_r($_FILES);
            // echo '</pre>';
            if(isset($_POST['create'])) {
                $name = $_POST['name'];
                $image =$_FILES['image'];
                $brand = $_POST['brand'];
                 $date=$_POST['date'];
                $price =$_POST['gia'];
                $discount = $_POST['discount'];
                $soluong = $_POST['soluong'];
                $pricediscount = $_POST['giakhuyenmai'];
                $description =$_POST['description'];
                
               
                if(empty($error)){
     
                    $file_name = '';
                    if($_FILES['image']['error']== 0){
                        $dir_upload = "assets/uploads";
                        if(!file_exists($dir_upload)){
                            mkdir($dir_upload);
                        }
                        $file_name=time()."".$_FILES['image']['name'];
                        move_uploaded_file($_FILES['image']['tmp_name'],"$dir_upload/$file_name");
                    }
    
                    //  if ($_FILES['image']['error'] == 0) {
                    // // + File upload phải là ảnh
                    // // - Lấy đuôi file từ tên file
                    // $extension = pathinfo($_FILES['image']['error'] == 0, PATHINFO_EXTENSION);
                    // // - Tạo mảng chứa các đuôi file ảnh:
                    // $allowed = ['png', 'jpg', 'gif', 'jpeg'];
                    // if (!in_array($extension, $allowed)) {
                    //     $error = 'File upload phải là ảnh';
                    // }
                // }
                    $product_model = new Product();
                    $is_insert = $product_model->insertData($name,$file_name,$brand,$date,$price,$discount,$soluong, $description,$pricediscount );
                    if($is_insert){
                        $_SESSION['success']= "Thêm thành công";
                        header('Location:index.php?controller=product&action=index');
                    }
                }    
            }

            // //validate nhap
            // if(!empty($name)){
            //     $error = 'tên phải nhập';
            // } else if (!isset($price)) {
            //     $error = 'Phải nhập giá';
            // }
        
            
            $this->page_title = 'Thêm sản phẩm';
            $this -> content =
                $this-> render('views\categories\product\create.php', [
                    'error' => $this->error,
                    'brands' => $brands
                ]);
              
            require_once 'views/layouts/product.php';
        }
        public function delete(){
            if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                $_SESSION['error'] = 'ID không hợp lệ';
                header('Location: index.php?controller=product&action=index');
                exit();
              }
          
              $id = $_GET['id'];
              $product_model = new Product();
              $is_delete = $product_model->deleteproductById($id);
              if ($is_delete) {
                $_SESSION['success'] = 'Xóa dữ liệu thành công';
              } else {
                $_SESSION['error'] = 'Xóa dữ liệu thất bại';
              }
              header('Location: index.php?controller=product&action=index');
              exit();

                        

        }
        public function update(){
            $brand_model = new Brand();
            $brands = $brand_model->showIn();
            $id = $_GET['id'];
           
            $product_model = new Product();
            $products = $product_model->getProductById($id);;

               if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                $_SESSION['error'] = 'ID category không hợp lệ';
                header('Location: index.php?controller=category&action=index');
                exit();}
                if(isset($_POST['update'])) {
                $name = $_POST['name'];
                $image =$_FILES['image'];
                $brand = $_POST['brand'];
                $date=$_POST['date'];
                $price =$_POST['gia'];
                $discount = $_POST['discount'];
                $soluong = $_POST['soluong'];
                $pricediscount = $_POST['giakhuyenmai'];
                $description =$_POST['description'];       
                if (empty($name)) {
                    $this->error = 'Không được để trống title';
                  } else if ($price) {
                    $this->error = 'Không được để trống giá của sản phẩm';
                  }else if ($soluong) {
                    $this->error = 'Không được để trống số lượng của sản phẩm';
                  }
                  if (empty($this->error)) {
                    $filename = '';
                    //xử lý upload file nếu có
                    if ($_FILES['image']['error'] == 0) {
                      $dir_uploads = 'assets/uploads';
                      if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                      }
                      //tạo tên file theo 1 chuỗi ngẫu nhiên để tránh upload file trùng lặp
                      $filename = time() . '-product-' . $_FILES['image']['name'];
                      move_uploaded_file($_FILES['image']['tmp_name'], $dir_uploads . '/' . $filename);
                       //save dữ liệu vào bảng products
                    $product_model = new Product();
                    $is_insert = $product_model->UpdateProduct($id,$name,$price,$filename,$brand,$description,$date,$discount,$pricediscount,$soluong);
                    if ($is_insert) {
                      $_SESSION['success'] = 'Insert dữ liệu thành công';
                    } else {
                      $_SESSION['error'] = 'Insert dữ liệu thất bại';
                    }
                    header('Location:index.php?controller=product&action=index');
                    exit();
                    // $message = $is_insert ? "Update dữ liệu thành công" : "Update dữ liệu không thành công";

                    }
                   
                  }

           
   
                
                
            }
                                $this->page_title = 'Thêm sản phẩm';
                    $this->content =
                        $this-> render('views\categories\product\update.php', [
                            'error' => $this->error,
                            'products' => $products,
                            'id'=> $id,
                           
                            'brands' => $brands,
                            
        
                            
                        ]);
                      
                    require_once 'views/layouts/product.php';
        }

}
?>