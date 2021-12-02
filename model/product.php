<?php
function insert_product($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "INSERT INTO product(name_product,price,img,mota,id_category) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}


function delete_product($id_product)
{
    $sql = "delete from product where id_product=" . $id_product;
    pdo_execute($sql);
}


function loadall_product_home()
{
    $sql = "select * from product where 1 order by id_product desc limit 0,12";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product_top10()
{
    $sql = "select * from product where 1 order by luotxem desc limit 0,10";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product($kyw = "", $iddm = 0)
{
    $sql = "select * from product where 1";
    if ($kyw != "") {
        $sql .= " and name_product like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and id_category= '" . $iddm . "'";
    }
    $sql .= " order by id_product desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadone_ten_dm($id_category)
{
    if ($id_category > 0) {
        $sql = "select * from category where id_category=" . $id_category;
        $category = pdo_query_one($sql);
        extract($category);
        return $name;
    }else{
        return "";
    }
}

function loadone_product($id_product)
{
    $sql = "select * from product where id_product=" . $id_product;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_product_cungloai($id_product, $id_cate)
{
    $sql = "select * from product where id_category=" . $id_cate . " AND id_product <>" . $id_product;
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function  update_product($id_product, $idcate, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh !== ""){
        $sql = "update product set id_category='" . $idcate . "',name_product='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',img='" . $hinh . "' where id_product=" . $id_product; 
    }   
    else{
        $sql = "update product set id_category='" . $idcate . "',name_product='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' where id_product=" . $id_product;
    }   
    pdo_execute($sql);
}

