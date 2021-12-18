<?php
    function loadall_bill()
    {
        $sql = "select * from bill order by id_bill desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadall_cart($id_bill)
    {
        $sql = "select * from cart where id_bill =".$id_bill;
        $listcart = pdo_query($sql);
        return $listcart;
    }
    
    
?>