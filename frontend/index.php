
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($controller);// Category
$controller .= "Controller"; // CategoryController
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