<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


// koneksi database
$koneksi = new PDO('mysql:host=localhost;dbname=rumahsakit','root','');
// cari di database
$query = $koneksi->query("select * from tb_user where username ='$username' And password ='$password'");
// cek jika ada data, maka bikin session ke halaman beranda

if($query->rowCount() > 0){
    $_SESSION ["username"] = $_POST['username'];
    $_SESSION ["password"] = $_POST['password'];
    header("location:beranda.php");
}else{
    // jika tidak maka ke halaman login
    header("location: form.php");
}