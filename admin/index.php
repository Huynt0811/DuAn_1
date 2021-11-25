<?php
include "../model/pdo.php";
include "header.php";
include "../model/category.php";
include "../model/product.php";
include "../model/taikhoan.php";
include "../model/comment.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
            // sản phẩm
        case 'addprd':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_category = $_POST['idcate'];
                $name_category = $_POST['tenprd'];
                $price = $_POST['giaprd'];
                $mota = $_POST['mota'];
                $img = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // echo "File đã được upload";
                } else {
                    // echo "File chưa được upload!";
                }
                insert_product($name_category, $price, $img, $mota, $id_category);
                $thongbao = "Thêm thành công";
            }

            $listcate = loadall_category();
            include "./product/add.php";
            break;
        case 'listprd':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listcate = loadall_category();
            $listproduct = loadall_product($kyw,$iddm);
            include "product/list.php";
            break;
        case 'delprd':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                delete_product($_GET['id_product']);
            }
            // if(!isset($kyw)&&!isset($iddm)){
            //     $kyw = '';
            //     $iddm = '';
            // }
            $listproduct = loadall_product($kyw, $iddm);
            include "./product/list.php";
            break;
        case 'editprd':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $product = loadone_product($_GET['id_product']);
            }
            $listcategory = loadall_category();
            include "./product/update.php";
            break;
        case 'updateprd':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $idcate = $_POST['idcate'];
                $id_product = $_POST['id_product'];
                $name_product = $_POST['tenprd'];
                $price = $_POST['giaprd'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // echo "File đã được upload";
                } else {
                    // echo "File chưa được upload!";
                }
                update_product($id_product, $idcate, $name_product, $price, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listproduct = loadall_product($kyw, $iddm);
            $listcategory = loadall_category();
            include "./product/list.php";
            break;
            // danh mục
            case 'addcate':
                if (isset($_POST['add']) && ($_POST['add'])) {
                    $name_category = $_POST['name_category'];
                    insert_category($name_category);
                    $noti = "Thêm thành công";
                }
                include "category/add.php";
                break;
            case 'listcate':
                $listcategory = loadall_category();
                include "category/list.php";
                break;
            case 'delcate':
                if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
                    $sql = "delete from category where id_cate=" . $_GET['id_category'];
                    pdo_execute($sql);
                }
                $listcategory = loadall_category();
                include "category/list.php";
                break;
            case 'editcate':
                if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
                    $category = loadone_category($_GET['id_category']);
                }
                include "category/update.php";
                break;
            case 'updatecate':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $id_category = $_POST['id_category'];
                    $name_category = $_POST['name_category'];
                    update_category($id_category, $name_category);
                    $noti = "Cập nhật thành công";
                }
                $listcategory = loadall_category();
                include "category/list.php";
                break;
        }
    
} else {
    include "home.php";
}
include "footer.php";
