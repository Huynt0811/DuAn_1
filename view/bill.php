<?php
    session_start();
    include "../model/pdo.php";
    include "./thuvien.php";
    function insert_cart($name_prd,$img_prd,$price,$quantity,$money,$id_bill)
    {
        $conn = pdo_get_connection();
        $sql = "INSERT INTO cart(name_prd,img_prd,price,quantity,money,id_bill) values('$name_prd','$img_prd','$price','$quantity','$money','$id_bill')";
        $conn -> exec($sql);
        $conn = null;
        
    }
    function insert_bill($name,$address,$tel,$email,$total,$pttt)
    {
        $conn = pdo_get_connection();
        $sql = "INSERT INTO bill(name_bill,address,tel,email,total,pttt) values('$name','$address','$tel','$email','$total','$pttt')";
        $conn -> exec($sql);
        $last_id= $conn ->lastInsertId();
        $conn = null;
        return $last_id;    
    }
    if (isset($_POST['dathang'])) {
        // lấy thông tin tự form để tạo đơn hàng
        $name = $_POST['name_buy'];
        $address = $_POST['address_buy'];
        $tel = $_POST['tel_buy'];
        $email = $_POST['email_buy'];
        $pttt=$_POST['pttt'];
        $total = total();
        $id_bill = insert_bill($name,$address,$tel,$email,$total,$pttt);
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
        
        
    }
    // header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <style>
            body{
                background: #ccc;
                opacity: inherit;
                height: 300px;position: relative;
            }
            .success{
                margin:15% auto;
                background: white;
                width: 300px;
                height: 200px;
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                box-shadow: 0px 1px 20px 4px ;
            }
            .text_success{
                padding: 60px 10px;
            }
        </style>
    </head>
    <body>
        <div class="warp">

            <div class="success">
                <div class="text_success">
                    <span >Đặt hàng thành công</span>
                    <i class="fas fa-check-circle"></i>
                    <br>
                    <a  class="btn btn-danger mt-3" href="../index.php">Quay về trang trủ</a>
                </div>
                
            </div>
            
        </div>
    </body>
</html>

