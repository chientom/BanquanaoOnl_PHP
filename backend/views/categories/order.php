<section class="content">
    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">

                    <h3>Hoá Đơn</h3>
                    
                </div>
                <div class="card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                            
                                <td>Số hoá đơn</td>
                                <td>Tên khách hàng</td>
                                <td>Ngày giao</td>
                                <td>Địa chỉ</td>
                                <td>SĐT</td>
                                <td>Hình thức thanh toán</td>
                                <td>Tổng tiền</td>
                                <td>Tác vụ</td>
                            </tr>
                        </thead>
                        <?php
                        foreach($order AS $order_value):
                        ?>


                        <tbody>
                            <tr>
                                <td><?php echo $order_value['sodh'];?></td>
                                <td><?php echo $order_value['tenkh'];?></td>
                                <td><?php echo $order_value['ngaygiao'];?></td>
                                <td><?php echo $order_value['diachi'];?></td>
                                <td><?php echo $order_value['dienthoai'];?></td>
                                <td><?php echo $order_value['hinhthucthanhtoan'];?></td>
                                <td><?php echo $order_value['thanhtien'];?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-success">Sửa</button>
                                    <button type="button" class="btn btn-outline-secondary">Xoá</button>
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