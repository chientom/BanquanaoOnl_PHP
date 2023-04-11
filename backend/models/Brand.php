<?php
require_once 'models/Model.php';
class Brand extends Model {
    public function getAll(){
        $sql_select_all = "SELECT * FROM `nhaxuatban`";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    }
    public function showIn(){
        $sql_select_all = "SELECT * FROM `nhaxuatban`";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertData($brand){
                // B1"
                $sql_insert ="INSERT INTO `nhaxuatban`(`Ten`) VALUES (:brand)";
                //B2:
                $obj_insert = $this->connection->prepare($sql_insert);
                // b3
                $inserts = [
                    ':brand' => $brand
                ];
                //B4:
                return $obj_insert->execute($inserts);
    }
}

?>