<?php
require_once 'models/Model.php';
class Order extends Model {

    public function getAll(){
        $sql_select_all = "SELECT * FROM `hoadon`";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>