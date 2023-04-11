<main>
    <div class="recent-grid">
        <div class="projects">
            <div class="card-header">
                <h3>Thêm sản phẩm</h3>

                <!-- <button>Xem thêm <span class="las la-arrow-right"></span></button> -->
            </div>
           
            <div class="card-body">
                <form action="http://localhost/coloshop_levanchien/backend/index.php?controller=product&action=create" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Tên" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" placeholder="Chọn tệp" name="image" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Thương Hiệu</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" style="width: 100%;" name="brand">
                                    <?php foreach($brands AS $brand_value):?>
                                    <option selected="selected" value="<?php echo $brand_value['ID'];?>"><?php echo $brand_value['Ten'];?></option>
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
                                <input type="date" class="form-control" id="datechoose" name="date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Giá</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gia">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Khuyến mãi</label>
                            <div class="col-sm-10">
                                <!-- <select class="form-control select2" style="width: 100%;" name="khuyenmai">
                                    <option selected="selected" value="1">Có khuyến mãi</option>
                                    <option value="0">Không khuyến mãi</option>
                                </select> -->
                                <input type="text" class="form-control" name="discount" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Số Lượng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="soluong" placeholder="Số lượng" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Giá khuyến mãi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="giakhuyenmai">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="#"><button type="button" name="cancel" class="btn-cancel">Cancel</button></a>

                            <button type="submit" name="create">Create <span class="las la-arrow-right"></span></button>
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