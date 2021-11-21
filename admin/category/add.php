<h1>THÊM DANH MỤC</h1>  
<form class="form form-add border-bottom" action="index.php?act=addcate" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mã danh mục:</label>
        <input type="text" name="id_category" class="form-control" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tên danh mục:</label>
        <input type="text" class="form-control" name="name_category" placeholder="Add Product">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" name="add" value="Thêm">
        <a href="index.php?act=listcate"><input class="btn btn-danger" type="button" value="Danh sách"></a>
    </div>
    <?php
        if(isset($noti) && ($noti!="")) echo $noti;
    ?>
</form>