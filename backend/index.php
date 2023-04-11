
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Phân tích url:
// + Lấy controller:
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
// Lấy action( phương thức trong class controller)
$action = isset($_GET['action']) ? $_GET['action'] : 'login';
    //  Ví dụ : với create  $controller = cagetory $ action= create
// Gọi controller bằng cách nhúng file:
// category -> CategoryController.php
$controller = ucfirst($controller);// Category
$controller .= "Controller"; // CategoryController
// Lưu đường dẫn tới controller, trong MVC mọi đường dẫn đều phải xuất phát từ file index gốc
$controller_path = "controllers/$controller.php";
if(!file_exists($controller_path)){
    die("Trang bạn tìm không tồn tại 404");

}
require_once $controller_path;
// 
$obj = new $controller();//$obj - new CategoryController()
if(!method_exists($obj,$action)) {
    die("Phương thức $action không tồn tại trong class $controller");
}
$obj->$action();
?>