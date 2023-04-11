<?php
require_once 'models/Model.php';
class Khachhang extends Model {
    // public function insertData($name,$file_name,$brand,$price,$discount,$date,$soluong, $description,$pricediscount ){
    //             // B1"
    //             $sql_insert ="INSERT INTO `sanpham`( `Ten`, `Gia`, `HinhAnh`, `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `soluong`) 
    //             VALUES (:name,:price,:avatar,:brand,:description,:date,:discount,:pricediscount)";
    //             //B2:
    //             $obj_insert = $this->connection->prepare($sql_insert);
    //             // b3
    //             $inserts = [
    //                 ':name' => $name,
    //                 ':avatar'=> $file_name,
    //                 ':brand' => $brand,
    //                 ':date'=> $date,
    //                 ':price'=> $price,
    //                 ':discount'=>$discount,
    //                 ':soluong'=>$soluong,
    //                 ':description'=> $description,
    //                 ':pricediscount'=>$pricediscount        
    //             ];
    //             //B4:
    //             return $obj_insert->execute($inserts);
    // }
    public function getAll(){
        $sql_select_all = "SELECT `emailkh`, `tenkh`, `diachi`, `dienthoai` FROM `hoadon`";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>