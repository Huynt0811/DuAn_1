<?php
     function insert_user($username,$password,$email,$address){
        $sql = "INSERT INTO users(username,password,email,address) values('$username','$password','$email','$address')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql = "SELECT * FROM users WHERE username='".$username."'AND password='".$password."'  ";
        $check= pdo_query_one($sql);
        return $check;
    }
    function checkemail($email){
        $sql = "SELECT * FROM users WHERE email='".$email."' ";
        $check= pdo_query_one($sql);
        return $check;
    }
    function  update_user($id_user,$username,$password,$email,$phone,$birthdate){
        $sql = "UPDATE users SET username='".$username."', password='".$password."', email='".$email."', phone='".$phone."', birthdate='".$birthdate."' WHERE id_user=".$id_user;
        pdo_execute($sql);
    }
    function loadall_user(){
        $sql = "SELECT * FROM users ORDER BY id_user DESC";
        $listuser = pdo_query($sql);
        return $listuser;
    }
?>
