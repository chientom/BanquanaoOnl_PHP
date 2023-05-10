<?php
require_once 'models/Model.php';
class User extends Model {
    public function register($username,$email, $password_hash){
        $sql_insert="INSERT INTO loginadmin(username,email,password) VALUES(:username,:email, :password)";
        $obj_insert = $this->connection->prepare($sql_insert);
        $inserts = [
            ':username'=> $username,
            ':email'=> $email,
            ':password' => $password_hash
        ];
        return $obj_insert->execute($inserts);
    }
    public function checkuser($username){
        $checkuser = "SELECT username FROM loginadmin WHERE username='$username'";
         if (empty($checkuser)){
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.";
            exit;
         }
        // $sql_select_user ="SELECT username FROM member WHERE username='$username'";
        // $obj_select_user =$this->connection->prepare($sql_select_user);
        // $check =[
        //     ':username'=>$username,
        // ];
        // return $obj_select_user->execute($check);
    }
    public function getByUsername($username){
        $sql_select_one = "SELECT * FROM loginadmin WHERE username =:username";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects = [
            ':username' => $username
        ];
        $obj_select_one->execute($selects);
         $user=$obj_select_one->fetch(PDO::FETCH_ASSOC);
         return $user;
    }
}

?>