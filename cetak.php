<?php

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
  <body>a
   
    <?php include 'menu.php';  ?><br><br>

    <div class="container"><br><br>
        <div class="row"><br>
            <div class="col s6"><br>
                <div class="card">
                    <div class="card-title blue white-text">
                        <img src="image/judul1.png" width="130" height="40"><h3>
                    </div><br>


                            <center><h3><label><i class="fas fa-plane mr-2" style="color: #FF1493"></i>
                                Detail Penerbangan

                           </label></h3><br></center>

                    <div class="card-content">
                        <div class="row">
                            <div class="col s6">
                                <?php
                            include "koneksi.php";
                            include "session.php";
                            
                            $id_reserv = $_GET['id_reserv'];
                            $sr = mysqli_query($conn, 'select * from reserv where id_reserv="'.$id_reserv.'" ');
                            $fr = mysqli_fetch_array($sr);
                            ?>

                            <form>
                                        <?php
                                include "koneksi.php";
                                $sfrom = mysqli_query($conn, 'select * from rute where id_rute="'.$fr['id_rute'].'" ');
                                $ffrom = mysqli_fetch_array($sfrom);
                                ?>
                                            <div class="input-field">
                                                <b><h5><i class="fas fa-plane-departure mr-3"></i>From</h5></b>
                                                <input type="text" id="form" value="<?=$ffrom['rute_from'];?>">
                                            </div><br>

                                            <div class="input-field">
                                                <b><h5><i class="fas fa-plane-arrival mr-3"></i>To</h5></b>
                                                <input type="text" id="to" value="<?=$ffrom['rute_to'];?>">
                                            </div><br>

                                            <div class="input-field">
                                                <b><h5><i class="far fa-calendar-alt mr-3"></i>Date</h5></b>
                                                <input type="date" id="date" value="<?=$fr['reserv_date'];?>">
                                            </div><br>
                                    </form>
                            </div>
                            <div class="col s2">
                                <div class="input-field">
                                    <b><h5><i class="fas fa-road mr-3"></i>Depart At</h5></b>
                                    <input type="text" id="depat" readonly value="<?=$fr['depart'];?>">
                                </div><br>

                                <div class="input-field">
                                    <b><h5><i class="fas fa-chair mr-3"></i>Seat</h5></b>
                                    <input type="text" id="seat" readonly value="<?=$fr['seat'];?>">
                                </div><br>

                                <div class="input-field">
                                    <b><h5><i class="fas fa-dollar-sign mr-3"></i>Price</h5></b>
                                    <input type="text" id="price" readonly value="Rp. <?=$ffrom['price'];?>">
                                </div><br>

                                 <div class="input-field">
                                        <b><h5><i class="fas fa-code mr-3"></i><a class="center">Booking Code</h5></b>
                                        <input class="center" type="text" id="bocode" value="<?=$fr['reserv_code'];?>">
                                    </div>
                            </div>
                        </div>
                    </div>
                  
                        </div>
                    </div>
                </div>
          <br>

                <div class="card"><br>
                    <div class="card-title blue white-text">
                    </div>

                    <div class="card-content">
                        <?php
                    include "koneksi.php";
                    $sc = mysqli_query($conn, 'select * from customer where username="'.$_SESSION['user'].'" ');
                    $qc = mysqli_fetch_array($sc);
                    $scus = mysqli_query($conn, 'select * from customer where id_customer="'.$qc['id_customer'].'" ');
                    $fcus = mysqli_fetch_array($scus);
                    ?>
                    <center> <h3><label><i class="fas fa-user mr-2" style="color: #FF1493"></i>
                                Detail Penumpang

                    </label></h3><br></center>

                            <form>
                                <div class="input-field">
                                    <b><h5><i class="fas fa-user mr-3"></i>Nama</h5></b>
                                    <input type="text" id="nama" readonly value="<?=$fcus['name'];?>">
                                </div><br>

                                <div class="input-field">
                                    <b><h5><i class="fas fa-map-marked-alt mr-3"></i>Alamat</h5></b>
                                    <input type="text" id="addr" readonly value="<?=$fcus['address'];?>">
                                </div><br>

                                <div class="input-field">
                                        <b><h5><i class="fas fa-phone mr-3"></i>Nomor Telepon</h5></b>
                                        <input type="text" id="phone" readonly value="<?=$fcus['phone'];?>">
                                </div><br>

                                <div class="input-field">
                                    <div class="input-field">
                                        <b><h5><i class="fas fa-venus-mars mr-3"></i>Jenis Kelamin</p></h5></b>
                                        <input type="text" id="gender" readonly value="<?=$fcus['gender'];?>">
                                    </div><br>
                                </div>
                            </form>
                    </div>
                    <br/>

                                <form>
                                    <div class="input-field">
                                        <b><h5><i class="fas fa-code mr-3"></i><label class="center">Booking Code</label></h5></b>
                                        <input class="center" type="text" id="bocode" readonly value="<?=$fr['reserv_code'];?>">
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div><br>
                              <center><img src="image/persyaratan.png" weight="100" height="90"></center>
</body>

</html>
<script>
    window.print();

</script>
