<?php
     function insert_taikhoan($email,$username,$password){
        $sql = "INSERT INTO taikhoan(email,username,password) values('$email','$username','$password')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql = "SELECT * FROM taikhoan WHERE username='".$username."'AND password='".$password."'  ";
        $check= pdo_query_one($sql);
        return $check;
    }
    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."' ";
        $check= pdo_query_one($sql);
        return $check;
    }
    function  update_taikhoan($idtk,$username,$password,$email,$address,$tel){
        $sql = "UPDATE taikhoan SET username='".$username."', password='".$password."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=".$idtk;
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
?>
