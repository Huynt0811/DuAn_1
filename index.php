<?php

session_start();
include "./model/pdo.php";
include "./model/category.php";
include "./model/product.php";
include "./model/taikhoan.php";
include "./model/thongke.php";
// include "./model/user.php";
include "./model/comment.php";
include "./view/header.php";

$prdnew = loadall_product_home();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($_GET['act']) {
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                insert_taikhoan($username, $password, $email, $address);
                $thongbao = "Đăng ký thành công!";
            }
            include "./view/user/signup.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
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
            include "./view/user/signin.php";
            break;
        
        case 'thongtin':
            include "./view/user/info.php";
            break;

        case 'edit_tk':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $username = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $birthdate = $_POST['birthdate'];
                update_user($id_user,$username,$password,$email,$phone,$birthdate);
                // header('Location:index.php?act=edit.php');
                $thongbao = "Cập nhật thành công!";
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
            // header('Location: index.php');
            break;
        default:
            # code...
            break;

    }
} else {
    include "./view/home.php";
}
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($_GET['act']){
        case 'dangnhap':
            break;
            default:
            include "./view/footer.php";
    }

}