<?php
    function insert_bill($name,$address,$tel,$total,$pttt)
    {
        $sql = "INSERT INTO bill(name_bill,address,tel,email,total,pttt) values('$name','$address','$tel','$total','$pttt')";
        pdo_execute($sql);
    }
?>