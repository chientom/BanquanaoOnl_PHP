<?php
    require_once 'models/Home.php';
    require_once 'models/Login.php';

    class LoginController extends Controller {
        public $id;
        public $username;
        public $password;
        public function login()
        {
          //nếu user đã đăngn hập r thì ko cho truy cập lại trang login, mà chuenr hướng tới backend
          if (isset($_SESSION['user'])) {
            header('Location: index.php?controller=home&action=index');
            exit();
          }
          if (isset($_POST['login'])) {
      //            die;
            $username = $_POST['username'];
            //do password đang lưu trong CSDL sử dụng cơ chế mã hóa md5 nên cần phải thêm
      //            hàm md5 cho password
            $password = $_POST['password'];
            //validate
            if (empty($username) || empty($password)) {
              $this->error = 'Username hoặc password không được để trống';
            }
            $user_model = new login();
            if (empty($this->error)) {
              $user = $user_model->getUser($username);
              if (empty($user)) {
                $this->error = 'Username ko tồn tại';
              } else {
                // + Dùng hàm sau để kiểm tra xem mật
                //khẩu mã hóa có đúng với mật khẩu từ
                //form gửi lên hay ko
                // Hàm này chỉ có tác dụng với các mật
                //khẩu đc mã hóa bằng hàm password_hash
                $is_same_password = password_verify($password, $user['password']);
                if ($is_same_password) {
                  $_SESSION['success'] = 'Đăng nhập thành công';
                  //tạo session user để xác định user nào đang login
                  $_SESSION['user'] = $user;
                  header("Location: index.php?controller=product");
                  exit();
                } else {
                  $this->error = 'Sai tài khoản hoặc mật khẩu';
                }
              }
            }
          }
          $this->content = $this->render('views/categories/login/index.php');
      
          require_once 'views/layout/mainlogin.php';
        }
    }
?>