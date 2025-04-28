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
   
    <?php include 'menu.php';  ?><br><br><br>

    <h1 class="text-center"><i class="fas fa-plane mr-2" style="color: #FF1493"></i>Daftar Tiket Yang tersedia</h1>
      <div class="container"><br>
        <div class="row"><br>
            <div class="col s12">
                <div class="card-panel default">
                   <table class="table table-bordered"><br>
                        <thead>
                            <tr  class="bg-info text-center">
                                <td><b>No</b></td>
                                <td><b>Tanggal Berangkat</b></td>
                                <td><b>Dari</b></td>
                                <td><b>Tujuan</b></td>
                                <td><b>Harga Tiket</b></td>
                            </tr>
                        </thead>
                      <tbody>
                        <tr>
                          <?php $nomor=1; ?>
                            <?php $ambil=$koneksi->query("SELECT * FROM rute"); ?>
                            
                            <?php while ($pecah = $ambil ->fetch_assoc()){ ?>
                            <tr>
                              <td><?php echo $nomor; ?></td>
                              <td><?php echo $pecah['depart']; ?></td>
                              <td><?php echo $pecah['rute_from']; ?></td>
                              <td><?php echo $pecah['rute_to']; ?></td>
                              <td><?php echo $pecah['price']; ?></td> 

                          
                        </tr>
                        <?php $nomor++; ?>
    <?php } ?>

                      </tbody>
                </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
