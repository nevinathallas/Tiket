<?php
include "koneksi2.php";
include "session.php";
$id_rute = $_GET['id_rute'];

$sq = mysqli_query($conn, 'select * from user where username="'.$_SESSION['user'].'" ');
$qq = mysqli_fetch_array($sq);


$status = 'Wait';

$sql = mysqli_query($conn, 'select * from rute where id_rute="'.$id_rute.'" ');
$query = mysqli_fetch_array($sql);
$res_a = $query['rute_from'];
$res_d = $query['depart'];
$res_p = $query['price'];
$res_ir = $query['id_rute'];
$rutt = $_POST['rute_to'];
$description = $_POST['description'];



$run = mysqli_query($conn, 'INSERT INTO reserv(reserv_code, reserv_a, reserv_date, seat, depart, price, description) VALUES ("'.$code.'","'.$res_a.'","'.$res_d.'","'.$res_s.'","'.$res_d.'","'.$res_p.'","'.$res_ir.'","'.$status.'","'.$depart.'", "'.$description.'") ');
if($run) {
    echo "<script>window.alert('Berhasil Booking!');window.location.href='keranjang.php';</script>";
} else {
    echo "<script>window.alert('Gagal!!');window.location.href='index2.php';</script>";
}
?>
