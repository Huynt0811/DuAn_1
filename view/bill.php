<?php
    session_start();
    include "../model/pdo.php";
    include "./thuvien.php";
    
    if (isset($_POST['dathang'])) {
        // lấy thông tin tự form để tạo đơn hàng
        $name = $_POST['name_buy'];
        $address = $_POST['address_buy'];
        $tel = $_POST['tel_buy'];
        $email = $_POST['email_buy'];
        $pttt=0;
        $total = total();
        $idbill = insert_bill($name,$address,$tel,$email,$total,$pttt);
        var_dump($idbill);
        // insert đơn hàng - tạo đơn hàng mới

        // lấy thông tin đơn hàng từ session + id đơn hàng vừa tạo

        // isert vào bảng giỏ hàng
        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) {  
            // $prd=[$priceprd,$soluong,$nameprd,$img,$namecate];
            $name_prd = $_SESSION['giohang'][$i][2];
            $img_prd = $_SESSION['giohang'][$i][3];
            $price = $_SESSION['giohang'][$i][0];
            $quantity = $_SESSION['giohang'][$i][1];
            $money = $price*$quantity;
            insert_cart($name_prd,$img_prd,$price,$quantity,$money,$id_bill);        
        }
        // show confirm đơn hàng

        // unset giỏ hàng session

        echo "Bạn đã đặt đơn hàng thành công. Đơn hàng của bạn là!";
    }
    
?>