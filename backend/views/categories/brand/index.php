

    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Thương Hiệu</h3>
                    <button><a href="index.php?controller=brand&action=create"> Thêm Thương hiệu</a> <span
                            class="las la-arrow-right"></span></button>
                </div>
                <div class="card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>ID Thương Hiệu</td>
                                <td>Tên Thương hiệu</td>
                                <td>Thao tác</td>

                            </tr>
                        </thead>
                        <?php
                        //cai bien $categories nay em chua truyen dc tu controller sang, nen no bao loi
                        foreach($brands AS $brand_value):?>
                        <tbody>
                            <tr>
                                <td><?php echo $brand_value['ID'];?></td>
                                 <td><?php echo $brand_value['Ten'];?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-success">Sửa</button>
                                    <button type="button" class="btn btn-outline-secondary">Xoá</button>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
