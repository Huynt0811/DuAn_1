
<h1>Danh sách đơn hàng</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <td>MÃ DANH MỤC</td>
            <td>TÊN DANH MỤC</td>
            <td>SỐ LƯỢNG</td>
            <td>GIÁ CAO NHẤT</td>
            <td>GIÁ THẤP NHẤT</td>
            <td>GIÁ TRUNG BÌNH</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listtk as $index => $tk) {        
            extract($tk);
            echo '<tr>
                    <td>' . $index+1 . '</td>
                    <td>' . $namecate . '</td>
                    <td>' . $countprd . '</td>
                    <td>' . $maxprice = number_format($maxprice, 0, '', ','). ' đ</td>
                    <td>' . $minprice = number_format($minprice, 0, '', ',') . ' đ</td>
                    <td>' . $avgprice = number_format($avgprice, 0, '', ',') . ' đ</td>
                  </tr>';
        }
        ?>
    </tbody>
</table>
<div class="btn-action">
   <a href=""></a>
</div>