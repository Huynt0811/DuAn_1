<?php
    include "./model/pdo.php";
    include "./model/category.php";
    include "./model/product.php";
    include "./model/taikhoan.php";
    include "./model/thongke.php";
    // include "./model/user.php";
    include "./model/comment.php";
    include "./view/header.php";

    $prdnew = loadall_product_home();

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $art = $_GET['act'];
    }else{
        include "./view/home.php";
    }
    include "./view/footer.php";
?>