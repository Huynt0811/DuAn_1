<?php
    function insert_cart($name_prd,$img_prd,$price,$quantity,$money,$id_bill)
    {
        $sql = "INSERT INTO cart(name_prd,img_prd,price,quantity,money,id_bill) values('$name_prd','$img_prd','$price','$quantity','$money','$id_bill')";
        pdo_execute($sql);
        
    }
    function insert_bill($name,$address,$tel,$email,$total,$pttt)
    {
        $sql = "INSERT INTO bill(name_bill,address,tel,email,total,pttt) values('$name','$address','$tel','$email','$total','$pttt')";
        pdo_execute($sql);
        
    }
    function total(){
        $tong = 0;
        if (isset($_SESSION['giohang'])&& (is_array($_SESSION['giohang']))) {
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt = $_SESSION['giohang'][$i][0] * $_SESSION['giohang'][$i][1];
                $tong += $tt;
                
            }
            
        }
        return $tong;
    }
    function showcart(){
        if (isset($_SESSION['giohang'])&& (is_array($_SESSION['giohang']))) {
            $tong = 0;
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt = $_SESSION['giohang'][$i][0] * $_SESSION['giohang'][$i][1];
                $tong += $tt;
                echo'<div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-3"><img class="img-fluid" src="../'.$_SESSION['giohang'][$i][3].'">
                            </div>
                            <div class="col">
                                <div class="row text-muted">'.$_SESSION['giohang'][$i][4].'</div>
                                <div class="row">'.$_SESSION['giohang'][$i][2].'</div>
                            </div>
                            <div class="col"> <a href="#"></a><a href="#" class="border">'.$_SESSION['giohang'][$i][1].'</a><a href="#"></a>
                            </div>
                            <div class="col">'.$tt.' đ<a href="cart.php?delid='.$i.'" class="close"><button class="btn btn-danger">X</button></a></div>
                        </div>
                    </div>';
            }
            echo ' <div class="btn-group">
                <a href="../index.php"><button type="button" class="btn btn-primary border col  m-3">Shop</button></a>
                <a href=""><input class="btn btn-warning col m-3" type="submit" name="dathang" value="Đặt hàng"></a>
                <a href="cart.php?delcart=1" class="close"><button type="button" class="btn btn-danger border col m-3">Xóa Giỏ Hàng</button></a>
                <div class="col align-self-center text-right text-muted">Total: '.$tong.'</div>
            </div>
            ';
            
        }
    }
?>