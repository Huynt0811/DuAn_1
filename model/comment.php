<?php
    function insert_comment($description_cmt,$id_user,$id_product,$date_cmt){
        $sql = "INSERT INTO comment(description_cmt,id_user,id_product,date_cmt) values('$description_cmt','$id_user','$id_product','$date_cmt')";
        pdo_execute($sql);
    }

    function loadall_comment($id_product){
        $sql = "SELECT * FROM comment WHERE 1";
        if ($id_product>0) {
            $sql.=" AND id_product='".$id_product."'";
        }
        $sql.=" ORDER BY id_product DESC";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function delete_comment($id_cmt){
        $sql = "DELETE FROM comment WHERE id_cmt=".$id_cmt;
        pdo_execute($sql);
    }
?>

