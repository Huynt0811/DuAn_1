
<h1>Danh sách đơn hàng</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name Bill</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Total</td>
            <td>Pay Method</td>
            <td>...</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listbill as $index => $bill) {        
            extract($bill);
            $pay = '';
            if ($pttt==0) {
                $pay = "Nhận hàng thanh toán!";
            }else if ($pttt==2) {
                $pay = "Thanh toán qua thẻ!";
            }
            $total = number_format($total, 0, '', ',');
            echo '<tr>
                    <td>' . $index + 1 . '</td>
                    <td>' . $name_bill . '</td>
                    <td>' . $address . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $email . '</td>
                    <td>' . $total . ' đ</td>
                    <td>'.$pay.'</td>
                    <td><a class="btn btn-outline-warning" href="index.php?act=ctdh&idbill='.$id_bill.'">Chi tiết</a></td>
                  </tr>';
        }
        ?>
    </tbody>
</table>
<div class="btn-action">
   <a href=""></a>
</div>