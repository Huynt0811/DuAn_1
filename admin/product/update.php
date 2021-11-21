<?php
    if(is_array($product)){
        extract($product);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<br><img src='".$hinhpath."' height='150'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="main-dashboard">
    <div class="title-nav">
        <h1>THÊM SẢN PHẨM</h1>
    </div>
    <form class="form form-add border-bottom" action="index.php?act=updateprd" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?=$id_product?>"  name="id_product">
            <div class="mb-3">
                <label class="form-label" for="ID">Tên sản phẩm:</label>
                <input class="form-control" type="text" name="tenprd" value="<?=$name_product?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Danh mục:</label>
                <select class="form-select form-select-lg mb-3" name="idcate" >
                    <?php
                        foreach ($listcategory as $cate) {
                            extract($cate);
                            if($id_cate==$id_category) $s="selected"; else $s="";
                            echo '<option value="'.$id_cate.'" '.$s.'>'.$name_category.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" >Giá sản phẩm:</label>
                <input class="form-control" type="text" name="giaprd" value="<?=$price?>">
            </div>
            <div class="mb-3">
                <label class="form-label" >Hình ảnh:</label>
                <input class="form-control" type="file" name="hinh">
                <?=$hinh?>
            </div>

            <div class="mb-3">
                <label class="form-label">Mô tả:</label>
                <textarea class="form-control" name="mota" cols="20" rows="5"><?=$mota?></textarea>
            </div>

            <div class="mb-3">
                <input class="btn btn-primary"  type="submit" name="update" value="Sửa">
                <input class="btn btn-warning" type="reset" value="Nhập lại" >
                <a href="index.php?act=listprd"><input class="btn btn-danger" type="button" value="Danh sách" name="" id=""></a>
            </div>
    </form>

</div>
</div>
</main>