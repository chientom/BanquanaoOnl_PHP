<?php
require_once 'models/Model.php';
require_once 'controllers/Controller.php';
class Product extends Model{
    public function showproduct(){
        $sql_select_all = "SELECT * FROM sanpham";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductById($id){
      $obj_select = $this->connection->prepare("SELECT * FROM sanpham WHERE id = $id");
      $obj_select->execute();
      $product = $obj_select->fetch(PDO::FETCH_ASSOC);
  
      return $product;
    }
}

?>