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

    <div class="container"><br>
        <div class="row"><br>
            <div class="col s12">
                <div class="card-panel default">
                    <center>
                    <h1><i class="fas fa-plane mr-2" style="color: #FF1493"></i>Hasil Pencarian Tiket</h1><br>
                    </center>
                   <table class="table table-bordered">
                        <thead>
                            <tr  class="bg-info text-center">
                                <td><b>Tanggal Berangkat</b></td>
                                <td><b>Dari</b></td>
                                <td><b>Tujuan Ke</b></td>
                                <td><b>Harga Tiket</b></td>
                                <td><b>Type</b></td>
                                <td><b>Pesan</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cari = $_POST['cari'];
                            
                            $sql = "SELECT rute.id_rute, rute.depart, rute.rute_from,rute.rute_to,rute.price,type_trans.description  
FROM rute,trans,type_trans 
WHERE type_trans.`id_trans_type`=trans.`id_trans_type` AND rute.`id_trans`=trans.`id_trans` AND (CONVERT(id_rute USING utf8) LIKE '%$cari%' OR CONVERT(depart USING utf8) LIKE '%$cari%' OR CONVERT(rute_from USING utf8) LIKE '%$cari%' OR CONVERT(`rute_to` USING utf8) LIKE '%$cari%' OR CONVERT(price USING utf8) LIKE '%$cari%' OR CONVERT(rute.id_trans USING utf8) LIKE '%$cari%')
 ";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_num_rows($query);
                            if($row==0) {
                                    echo "Pencarian Destinasi tidak ditemukan, Silahkan Cari lagi!";
                                } else {
                            while($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td>
                                        <?=$data['depart'];?>
                                    </td>
                                    <td>
                                        <?=$data['rute_from'];?>
                                    </td>
                                    <td>
                                        <?=$data['rute_to'];?>
                                    </td>
                                    <td>
                                        <?=$data['price'];?>
                                    </td>
                                    <td>
                                        <?=$data['description'];?>
                                    </td>
                                    <td class="text-center"><a href="booking.php?id_rute=<?=$data['id_rute'];?>"><button class="btn btn-primary">Pesan</button></a></td>
                                </tr>
                                <?php  } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
