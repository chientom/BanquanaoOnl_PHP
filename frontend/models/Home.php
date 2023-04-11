<?php
require_once 'models/Model.php';
class Home extends Model{
    public function showproduct(){
        $sql_select_all = "SELECT * FROM sanpham";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>