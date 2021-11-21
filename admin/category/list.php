<h1>Danh sách danh mục</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td id="name-catogory">Name catogory</td>
            <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($listcategory as $index => $listcate){
            extract($listcate);
            $editcate = "index.php?act=editcate&id_category=" .$id_cate;
            $delcate = "index.php?act=delcate&id_category=" .$id_cate;
            echo '<tr>
                    <td>'. $index+1 .'</td>
                    <td>'. $name_category .'</td>
                    <td><a href="'.$editcate.'"><input class="btn btn-outline-warning mr-2" type="button" value="Sửa"></a><a href="'.$delcate.'"><input class="btn btn-outline-danger" type="button" value="Xóa"</a></td>
                  </tr>';
                
        }
    ?>
    </tbody>
</table>
<div class="btn-action">
    <input class="btn btn-secondary" type="button"  value="Chọn tất cả">
    <input class="btn btn-secondary" type="button" value="Bỏ chọn tất cả">
    <a class="text-decoration-none" href=""><input type="button" class="btn btn-danger" value="Xóa các danh mục đã chọn"></a>
    <a href="index.php?act=addcate"><input type="button" class="btn btn-info" value="Nhập thêm"></a>
</div> 