
<h1>Chi tiết đơn hàng</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Money</td>
            <td>Id Bill</td>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listcart as $index => $cart) {        
            extract($cart);
            $hinhpath =  $img_prd;
            $hinh = "<img src='../" . $hinhpath . "' height='80'>";
            $money = number_format($money, 0, '', ',');
            $price = number_format($price, 0, '', ',');

            echo '<tr>
                    <td>' . $index + 1 . '</td>
                    <td>' .$hinh. '</td>
                    <td>' . $price . ' đ</td>
                    <td>' . $quantity . '</td>
                    <td>' . $money . ' đ</td>
                    <td>' . $id_bill . '</td>
                    <td><a class="btn btn-outline-warning" href="index.php?act=qldh">Back</a></td>
                  </tr>';
        }
        ?>
    </tbody>
</table>
<div class="btn-action">
   
</div>