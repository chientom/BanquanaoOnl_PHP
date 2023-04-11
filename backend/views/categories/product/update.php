<main>
    <div class="recent-grid">
        <div class="projects">
            <div class="card-header">
                <h3><?php $this->page_title?></h3>

                <!-- <button>Xem thêm <span class="las la-arrow-right"></span></button> -->
            </div>


            <div class="card-body">
                <form action="http://localhost/coloshop_levanchien/backend/index.php?controller=product&action=create"
                    method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name"
                                    placeholder=" " value=" <?php echo $products['Ten'];?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" placeholder="Chọn tệp" name="image" value="<?php echo $products['HinhAnh']; ?>" required>
                                <?php if (!empty($products['HinhAnh'])): ?>
                                <img src="assets/uploads/<?php echo $products['HinhAnh']; ?>" height="50" />
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Thương Hiệu</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" style="width: 100%;" name="brand">
                                    <?php foreach($brands AS $brand_value): ?>

                                    <?= $products["Manhasx"] == $brand_value["ID"] ? '<option selected value="'.$brand_value["ID"].'">'.$brand_value["Ten"].'</option>' : '<option value="'.$brand_value["ID"].'">'.$brand_value["Ten"].'</option>' ?>
                                    <?php endforeach ?>
                                    <!-- <option selected="selected" value="1">Adidas</option>
                                    <option selected="selected" value="2">MLB</option>
                                    <option selected="selected" value="3">Nike</option> -->

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Ngày</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="datechoose" name="date" required value="<?php echo $products['date']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Giá</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gia" value="<?php echo $products['Gia'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Khuyến mãi</label>
                            <div class="col-sm-10">
                                <!-- <select class="form-control select2" style="width: 100%;" name="khuyenmai">
                                    <option selected="selected" value="1">Có khuyến mãi</option>
                                    <option value="0">Không khuyến mãi</option>
                                </select> -->
                                <input type="text" class="form-control" name="discount" value="<?php echo $products['KhuyenMai'];?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Số Lượng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="soluong" value="<?php echo $products['soluong'];?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Giá khuyến mãi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="giakhuyenmai" value="<?php echo $products['giakhuyenmai'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea id="editor1" name="description" rows="10" cols="80" value="<?php echo $products['Mota'];?>"></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="#"><button type="button" name="cancel" class="btn-cancel">Cancel</button></a>

                            <button type="submit" name="update">Update<span class="las la-arrow-right"></span></button>
                        </div><!-- /.box-footer -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="form-nhap">

                    <div class="form-field">
                        <span>Tên</span>
                        <input type="text" class="form-input" placeholder=" " />
                        <label for="name" class="form-label">Name</label>
                    </div>
                </div> -->

    </div>
</main>