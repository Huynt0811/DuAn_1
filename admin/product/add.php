<div class="main-dashboard">
    <div class="title-nav">
        <h1>THÊM SẢN PHẨM</h1>
    </div>
    <form class="form form-add border-bottom" action="index.php?act=addprd" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label" for="ID">Tên sản phẩm:</label>
                <input class="form-control" type="text" name="tenprd">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Danh mục:</label>
                <select class="form-select form-select-lg mb-3" name="idcate" >
                    <?php
                        foreach ($listcate as $cate){
                            extract($cate);
                            echo "<option value='".$id_category."'>$name_category</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Giá sản phẩm:</label>
                <input class="form-control" type="text" name="giaprd">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Hình ảnh:</label>
                <input class="form-control" type="file" name="hinh">
            </div>

            <div class="mb-3">
                <label class="form-label">Mô tả:</label>
                <textarea class="form-control" name="mota" cols="20" rows="5"></textarea>
            </div>

            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="themmoi" value="Thêm mới">
                <input class="btn btn-warning" type="reset" value="Nhập lại" name="" id="">
                <a href="index.php?act=listprd"><input class="btn btn-danger" type="button" value="Danh sách" name="" id=""></a>
            </div>
    </form>

</div>
</div>
</main>