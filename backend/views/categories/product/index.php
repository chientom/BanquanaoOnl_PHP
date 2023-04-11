<section class="content">
    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">

                    <h3>Sản phẩm gần đây</h3>
                    <button><a href="index.php?controller=product&action=create"> Thêm sản phẩm</a> <span
                            class="las la-arrow-right"></span></button>
                </div>
                <div class="card-body">

                    <table width="100%">
                        <thead>
                            <tr>
                                <td>ID sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá </td>
                                <td>Hình ảnh</td>
                                <td>Thương Hiệu</td>
                                <td>Ngày nhập</td>
                                <td>Số lượng</td>
                                <!-- <td>Mô tả</td> -->
                                <td>Gia Khuyến mãi</td>
                                
                                <td>Tác vụ</td>
                            </tr>
                        </thead>
                        <?php
                        foreach($products AS $product_value):
                        ?>


                        <tbody>
                            <tr>
                                <td><?php echo $product_value['ID'];?></td>
                                <td> <?php echo $product_value['Ten'];?> </td>
                                <td><?php echo $product_value['Gia'];?></td>
                                <td><?php echo $product_value['HinhAnh'];?></td>
                                <td><?php echo $product_value['Manhasx'];?></td>
                                <td><?php echo $product_value['date'];?></td>
                                <td><?php echo $product_value['soluong'];?></td>
                                <!-- <td></td> -->
                                <td><?php echo $product_value['giakhuyenmai'];?></td>
                                
                                <td>
                                    
                                    <button type="button" class="btn btn-outline-success" >
                                        <a style="text-decoration:none; color:#6c757d"  href="index.php?controller=product&action=update&id=<?php echo $product_value['ID'];?>">Sửa</a></button>
                                    <button type="button" class="btn btn-outline-secondary"> <a   onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này')"  style="text-decoration:none; color:#6c757d"  href="index.php?controller=product&action=delete&id=<?php echo $product_value['ID'];?>">Xoá</a></button>
                                </td>
                               
                            </tr>
                            <tr>

                            </tr>
                            <tr>

                            </tr>
                        </tbody>
                           
                        <?php endforeach ?>        
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>