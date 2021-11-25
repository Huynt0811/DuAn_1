<?php
    include "./model/pdo.php";
    include "./model/category.php";
    include "./model/product.php";
    include "./model/taikhoan.php";
    include "./model/thongke.php";
    include "./model/comment.php";
    include "./view/header.php";
    $prdnew = loadall_product_home();
    
    
    // home
    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act = $_GET['act'];
        switch($act){
            case 'prd_detail':
                if(isset($_GET['idprd'])&&$_GET['idprd']>0){
                    $id_product = $_GET['idprd'];
                    $oneprd = loadone_product($id_product);
                    extract($oneprd);
                    $prd_same = load_product_cungloai($id_product, $id_category);
                    include "./view/prd_detail.php";
                }else{
                    include "./view/home.php";
                }
                break;
            default:
                include "./view/home.php";
                break;
        }
    }else{
        include "./view/home.php";
    }
    include "./view/footer.php";
?>