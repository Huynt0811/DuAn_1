    
<h1>Danh sách sản phẩm</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td >Tên sản phẩm</td>
            <td>Giá</td>
            <td>Ảnh</td>
            <td>Mô tả</td>
            <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($listproduct as $index => $listprd){
            extract($listprd);
            $hinhpath = "../upload/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='80'>";
            } else {
                $hinh = "no photo";
            }
            $editprd = "index.php?act=editprd&id_product=" .$id_product;
            $delprd = "index.php?act=delprd&id_product=" .$id_product;
            echo '<tr>
                    <td>'. $index+1 .'</td>
                    <td>'. $name_product.'</td>
                    <td>'. $price .'</td>
                    <td>'. $hinh .'</td>
                    <td>'. $mota .'</td>
                    <td><a href="'.$editprd.'"><input class="btn btn-outline-warning mr-2" type="button" value="Sửa"></a><a href="'.$delprd.'"><input class="btn btn-outline-danger" type="button" value="Xóa"</a></td>
                  </tr>';
                
        }
    ?>
    </tbody>
</table>
<div class="btn-action">
    <input class="btn btn-secondary" type="button"  value="Chọn tất cả">
    <input class="btn btn-secondary" type="button" value="Bỏ chọn tất cả">
    <a class="text-decoration-none" href=""><input type="button" class="btn btn-danger" value="Xóa các danh mục đã chọn"></a>
    <a href="index.php?act=addprd"><input type="button" class="btn btn-info" value="Nhập thêm"></a>
</div> 