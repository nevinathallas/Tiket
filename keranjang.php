<?php
session_start();
//koneksi ke database
include 'koneksi2.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tiketin | Penyedia Tiket Pesawat</title>
    <link rel="shortcut icon" href="jpg/LOGO.png">
  </head>  
  <body>
   
    <?php include 'menu.php';  ?><br><br>
    <?php
    include "koneksi2.php";
    $s = mysqli_query($conn, 'select * from user where username="'.$_SESSION['user'].'" ');
    $q = mysqli_fetch_array($s);
    $id_user = $q['id_user'];
    ?><br>

        <div class="container"><br>
            <div class="row"><br>
                <div class="col s12">
                    <div class="card-panel default">
                        <center>
                            <h1> <i class="fas fa-cart-plus  text-dark ml-3"> </i> Keranjang Anda</h1>
                            <p>Mohon tunggu Notifikasi dari Admin</p>
                            <b>Nb:</b> <i>sebelum cetak tiket, anda harus mengisi data diri anda.</i><a href="pengaturan.php"><button class="btn btn-primary"><i class="fas fa-cog"></i></button></a>
                        </center>
                    </div>
                </div>
                <div class="col s4">
                    <?php
                include "koneksi.php";
                $sql = mysqli_query($conn, 'select * from reserv where id_user="'.$id_user.'" ');
                while($query = mysqli_fetch_array($sql)) {
                ?>

                        <div class="card mr-2 ml-2 mt-3 alert alert-dark">
                            <div class="card-body">
                            <b class="white-text">Code Booking</b>
                            <p>
                                <?=$query['reserv_code'];?>
                            </p>
                            <b class="white-text">Status</b><br>
                            <p>
                                <?php
                                if($query['status'] == 'Proses') {
                                    echo "Proses";
                                } else {
                                ?>
                                    <a href="cetak.php?id_reserv=<?=$query['id_reserv'];?>" target="_blank"><button class="btn btn-success"><i class="fas fa-print mr-2"></i>Print</button></a>
                                    <?php
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                        <?php } ?>
                </div>

            </div>
        </div>

</body>

</html>
