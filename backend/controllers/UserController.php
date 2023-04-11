<?php 
require_once 'models/Users.php';
require_once 'controllers/Controller.php';
class UserController extends Controller {
    
    //  index.php?controller=user&action=register
    public function register(){
        // echo '<pre>';
        // print_r($_POST); 
        // echo '</pre>';
        if(isset($_POST['register'])){
    
            if(empty($_POST['username'])) {
                echo "Bạn không được bỏ trống trường Username";
            }else{
                $username = $_POST['username'];
            }
            if(empty($_POST['email'])) {
                echo "Bạn không được bỏ trống trường Email";
            }else{
                $email = $_POST['email'];
            }
            
            if(empty($_POST['password'])) {
                echo "Bạn không được bỏ trống trường Password";
            }else{
                $password = $_POST['password'];
            }
            // 
            if(empty($this->error)){
                // Mã hoá mật khẩu theo thuật toán bcypt:
                $password_hash = password_hash($password,PASSWORD_BCRYPT);
                // var_dump($password_hash);
                // COntroller gọi model:
                $user_model = new User();
                // Cần phải cso 1 bước check xem đã tồn tại 1 tải khoản như thế chưa
                // $is_check = $user_model->checkuser($username);
                // if (mysql_num_rows(mysql_query("SELECT username FROM member WHERE username='$username'")) > 0){
                //     echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                //     exit;
                // }
                $is_register = $user_model->register($username,$email,$password_hash);
                var_dump($is_register);
            }
            
        }
         // Controller gọi View
         $this->page_title='Đăng ký user';
         $this->content = 
             $this->render('views/login/register.php');
         require_once 'views/layouts/layout_login.php';
     }
    //  index.php?controller=user&action=login

    public function login(){
        // Controller xử lý submit
        // echo '<pre>';
        // print_r($_POST); 
        // echo '</pre>';
        session_start();
        if(isset($_POST['login'])){
            if(empty($_POST['username'])) {
                echo "Bạn không được bỏ trống trường Username";
            }else{
                $username = $_POST['username'];
            }
            if(empty($_POST['password'])) {
                echo "Bạn không được bỏ trống trường Password";
            }else{
                $password = $_POST['password'];
            }
            if(empty($this->error)){
                $user_model = new User();
                $user =$user_model->getByUsername($username);
                // echo'<pre>';
                // print_r($user);
                // echo'</pre>';
                if(empty($user)){
                    $this->error="không tồn tại tài khoản $username";
                    
                }else{
                    $password_hash=$user['password'];
                    $is_login = password_verify($password,$password_hash);
                    var_dump($is_login);
                    if($is_login){
                        $_SESSION['user'] = $user;
                        header('location:index.php?controller=category&action=index');
                        // header('location:views/layouts/main.php');
                        exit();
                    }
                    $this->error='Sai mật khẩu';
                }
            }
        }
        $this->page_title = 'Form đăng nhập';
        $this->content =
            $this->render('views/login/login.php');
        require_once 'views/layouts/layout_login.php';
    }
}


?>