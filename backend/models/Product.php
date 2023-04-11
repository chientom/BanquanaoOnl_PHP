<?php
require_once 'models/Model.php';
class Product extends Model {
    public function insertData($name, $file_name, $brand, $price, $discount, $date, $soluong, $description, $pricediscount){
                // // B1"
                // $sql_insert ="INSERT INTO `sanpham`( `Ten`, `Gia`, `HinhAnh`, `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `soluong`) 
                // VALUES (:name,:price,:image,:brand,:description,:date,:discount,:pricediscount,:soluong)";

                $sql_insert = "INSERT INTO `sanpham`( `Ten`, `Gia`, `HinhAnh`, `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `soluong`)
                                VALUES (            :name,  :discount,   :image,   :brand, :description,:price,:date,:pricediscount,:soluong)";
                // echo "name: ".$name; 
                // echo "price: ". $price;
                // echo "file name: ".$file_name; 
                // echo "brand: ". $brand;
                // echo "description: ".$description;
                // echo "date: ".$date; 
                // echo "discount: ". $discount;
                // echo "pricediscount: ". $pricediscount;
                // echo "soluong: ". $soluong;
                // $sql_insert = "INSERT INTO `sanpham` (`Ten`, `Gia`, `HinhAnh`, `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `soluong`) VALUES (".$name.", ".$price.", ".$file_name.", ".$brand.", ".$description.", ".$date.", ".$discount.", ".$pricediscount.", ".$soluong.");";
                // $sql_insert = "INSERT INTO sanpham ('Ten', 'Gia', 'HinhAnh', `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `soluong`) VALUES ('OK', '90000', 'hinhanhtest', '1093T', 'no comments', '2022-2-19', '30000', '20000', 2)";

                //B2:
                $obj_insert = $this->connection->prepare($sql_insert);
                //b3
                $inserts = [
                    ':name' => $name,
                    ':price'=> $price,
                    ':image'=> $file_name,
                    ':brand' => $brand,
                    ':description'=> $description,
                    ':date'=> strval($date),
                    ':discount'=>$discount,
                    ':pricediscount'=>$pricediscount,      
                    ':soluong'=>$soluong  
                ];
                //B4:
                return $obj_insert->execute($inserts);
                // return $obj_insert->execute();

    }
    public function getAll(){
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
    public function UpdateProduct($id,$name,$price,$filename,$brand,$description,$date,$discount,$pricediscount,$soluong)  {
        
        $sql_update = "UPDATE `sanpham` SET `Ten`=:name,`date`=:price,`Gia`=:discount,`HinhAnh`=:image,`Manhasx`=:brand,`Mota`=:description,`KhuyenMai`=:date,`giakhuyenmai`=:pricediscount,`soluong`=:soluong WHERE id =$id";
        $obj_update = $this->connection->prepare($sql_update);
        $updates = [
            ':name' => $name,
            ':price'=> $price,
            ':image'=> $filename,
            ':brand' => $brand,
            ':description'=> $description,
            ':date'=> strval($date),
            ':discount'=>$discount,
            ':pricediscount'=>$pricediscount,      
            ':soluong'=>$soluong  
        ];
        return $obj_update->execute($updates);
       
    }
    public function deleteproductByID($id){
        $obj_delete = $this->connection
        ->prepare("DELETE FROM sanpham WHERE id = $id");
    return $obj_delete->execute();  
    }
}

?>