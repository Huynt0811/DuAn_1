<?php
function insert_category($name_category)
{
    $sql = "insert into category(name_category) values('$name_category')";
    pdo_execute($sql);
}

function delete_category($id_category)
{
    $sql = "delete from category where id_cate=" . $id_category;
    pdo_execute($sql);
}

function loadall_category()
{
    $sql = "select * from category order by id_cate desc";
    $listcategory = pdo_query($sql);
    return $listcategory;
}

function loadone_category($id_category)
{
    $sql = "select * from category where id_cate=" . $_GET['id_category'];
    $category = pdo_query_one($sql);
    return $category;
}

function update_category($id_category,$name_category)
{
    $sql = "update category set name_category='" . $name_category . "' where id_cate=" . $id_category;
    pdo_execute($sql);
}
?>
