<?php
    function insert_comment($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql = "INSERT INTO comment(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_comment($idpro){
        $sql = "SELECT * FROM comment WHERE 1";
        if ($idpro>0) {
            $sql.=" AND idpro='".$idpro."'";
        }
        $sql.=" ORDER BY id DESC";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    function delete_comment($id){
        $sql = "DELETE FROM comment WHERE id=".$id;
        pdo_execute($sql);
    }
?>

