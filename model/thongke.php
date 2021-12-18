<?php
function loadall_thongke(){
    $sql = "select category.id_cate as idcate, category.name_category as namecate, count(product.id_product) as countprd, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice";
    $sql .=" from product left join category on category.id_cate=product.id_category";
    $sql .= " group by category.id_cate order by category.id_cate desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
?>