<?php
if (is_array($category)) {
    extract($category);
    var_dump($id_cate);
    var_dump($name_category);
}
?>

<h1>Cập nhật danh mục</h1>
<form class="form form-add border-bottom" action="index.php?act=updatecate" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mã danh mục:</label>
        <input type="text" name="id_category" class="form-control" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tên danh mục:</label>
        <input type="text" name="name_category" class="form-control" value="<?php if (isset($name_category) && ($name_category != "")) echo $name_category; ?>">
    </div>
    <div class="mb-3">

        <input  type="hidden" name="id_category" value="<?php if(isset($id_cate) && ($id_cate!="")) echo $id_cate;?>">

        <input class="btn btn-warning" type="submit" name="update" value="Update">
        <a href="index.php?act=listcate"><input class="btn btn-success" type="button" value="Danh sách"></a>
    </div>
    <?php
        if (isset($noti) && ($noti != "")) echo $noti;
    ?>
</form>