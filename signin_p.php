<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$u = mysqli_real_escape_string($connect,$user);
$p = mysqli_real_escape_string($connect,$pass);

$sql = mysqli_query($connect,'select * from user where username="'.$u.'" and password="'.$p.'" ');
$al = mysqli_num_rows($sql);

if($al == 1) {
    session_start();
    $_SESSION['user']=$user;
    echo "<script>window.alert('Selamat Datang Di Tiketin.com');window.location.href='../tiket/index2.php';</script>";
} else {
    echo "<script>window.alert('Username Atau Password Salah');window.location.href='signin.php';</script>";
}
