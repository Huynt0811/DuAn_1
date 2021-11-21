<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($email, $user, $password)
{
    $sql = "insert into taikhoan (email,user,password) values('$email','$user','$password')";
    pdo_execute($sql);
}

function checkuser($user, $password)
{
    $sql = "select * from taikhoan where user='".$user."' AND password='".$password."'" ;
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}


function  update_taikhoan($id, $user, $password, $email, $tel)
{
    $sql = "update taikhoan set user='" . $user. "',password='" . $password . "',email='" . $email . "',tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}


