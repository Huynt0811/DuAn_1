<?php

session_start();
include "./model/pdo.php";
include "./model/category.php";
include "./model/product.php";
include "./model/taikhoan.php";
include "./model/thongke.php";
include "./model/comment.php";
$prdnew = loadall_product_home();
$lstcate = loadall_category();
include "./view/header.php";



if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($_GET['act']) {
        case 'prd':
            if(isset($_GET['id_cate'])&&$_GET['id_cate']>0){
                $id_cate = $_GET['id_cate'];
                $lstprd = loadall_product("", $id_cate);
                include "./view/product.php";
            }else{
                include "./view/home.php";
            }
            break;
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
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                if (empty($_POST["email"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập email</span>";
                } else if (empty($_POST["user"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập tên đăng nhập</span>";
                } else if (empty($_POST["password"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập mật khẩu</span>";
                } else if (empty($_POST["address"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập địa chỉ</span>";
                } else {
                    $email = $_POST['email'];
                    $username = $_POST['user'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    insert_taikhoan($username,$password,$email,$address);
                    $thongbao = "Đăng kí thành công. Vui lòng đăng nhập";
                }
            }
            include "./view/user/signup.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                if (empty($_POST["user"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập tên đăng nhập</span>";
                } else if (empty($_POST["password"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập mật khẩu</span>";
                } else {
                    $username = $_POST['user'];
                    $password = $_POST['password'];
                    $checkuser = checkuser($username, $password);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        //header('Location: index.php');
                    } else {
                        $thongbao = "Tài khoản không tồn tại. Vui lòng đăng ký!";
                    }
                }
            }
            include "./view/user/signin.php";
            break;

        case 'edit_tk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                if (empty($_POST["email"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập email</span>";
                } else if (empty($_POST["user"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập tên đăng nhập</span>";
                } else if (empty($_POST["user"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập mật khẩu</span>";
                } else if (empty($_POST["phone"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập số điện thoại</span>";
                } else if (empty($_POST["birthdate"])) {
                    $thongbao = "<span style='color:red;'>Error: Chưa nhập ngày tháng năm sinh</span>";
                } else {
                    $thongbao = "Cập nhật thành công!";
                }
                $username = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $birthdate = $_POST['birthdate'];
                update_user($id_user, $username, $password, $email, $phone, $birthdate);
                // header('Location:index.php?act=edit.php');

            }
            include "./view/user/edit.php";
            break;

        case 'quen_mk':
            if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if(is_array($checkemail)){
                    $thongbao = "Mật khẩu của bạn: " .$checkemail['password'];
                } else{
                    $thongbao = "Email không tồn tại";
                }
            }
            include "./view/user/forgot_pass.php";
            break;

        case 'dangxuat':
            session_unset();
            header('Location: index.php');
            break;
        case 'cart':     
            include "./view/cart/cart.php";
            break;
        default:
            # code...
            break;

    }
} else {
    include "./view/home.php";
}
include "./view/footer1.php";