<?php

//mulai session 
session_start();

//koneksi ke database 
include "koneksi.php";

//ambil data dari form Login 
$username=$_POST['nama'];
$password=$_POST['password'];

//query dari tabel user 

$ambildata=mysqli_query ($konek,"select * from user where ADMINID='$username' and password='$password'");
$ambildatauser=mysqli_query ($konek, "select * from usernotadmin where USERID='$username' and password='$password'");


//cek data 
$cekadmin=mysqli_num_rows ($ambildata); 
$cekuser=mysqli_num_rows($ambildatauser);


if($cekadmin>0)
{
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['status']= 'login';
    header("location:admin/dashboard.php");
}
elseif($cekuser>0)
{
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['status']= 'login';
    header("location:user/userdashboard.php");
}
else
{
header("location:index.php");
}

$GLOBALS[$username];

?>