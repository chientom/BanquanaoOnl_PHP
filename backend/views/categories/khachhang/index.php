<section class="content">
    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">

                    <h3>Khách Hàng</h3>
                    
                </div>
                <div class="card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                            
                                <td>Tên khách hàng</td>
                                <td>Email khách hàng</td>
                                <td>Địa chỉ</td>
                                <td>SĐT</td>
                                <td>Tác vụ</td>
                            </tr>
                        </thead>
                        <?php
                        foreach($khachhang AS $khachhang_value):
                        ?>


                        <tbody>
                            <tr>
                                <td><?php echo $khachhang_value['tenkh'];?></td>
                                <td><?php echo $khachhang_value['emailkh'];?></td>
                                <td><?php echo $khachhang_value['diachi'];?></td>
                                <td><?php echo $khachhang_value['dienthoai'];?></td>
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