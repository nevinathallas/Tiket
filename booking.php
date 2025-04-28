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
            <div class="col s7">
                <div class="card-panel">
                   <center>
                        <h1><i class="fas fa-calendar-check mr-4" style="color: #FF1493"></i>Booking Tiket </h1><br>
                    </center>
                    <form method="post" action="pesan_p.php">
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $res_code = $c;
                            ?>
                                
                                <b><h5><i class="fas fa-code mr-3"></i><label for="name">Kode Booking</label><br></h5></b>
                                <input type="text" name="res_code" id="name" readonly value="<?=$res_code;?>">
                        </div><br>
                        <?php
                        include "koneksi.php";
                        $id_rute = $_GET['id_rute'];
                        $sqr = mysqli_query($conn, 'select * from rute where id_rute="'.$id_rute.'" ');
                        $qur = mysqli_fetch_array($sqr);
                        ?>
                            <div class="input-field">
                                <b><h5><i class="fas fa-map-marked-alt mr-3"></i><label for="name"> Booking Pada</label></h5></b>
                                <input type="date" name="res_a">
                            </div><br>

                            <div class="input-field">
                                <b><h5><i class="far fa-calendar-alt mr-3"></i>Tanggal Booking</h5></b>
                                <input type="date" name="res_d" id="tb" value="<?= date("Y-m-d") ?>" readonly>
                            </div><br>

                            <div class="input-field">
                                <b><h5><i class="fas fa-chair mr-3"></i><label for="phone">Kode Kursi</label></h5></b></label>
                                <?php
                                include "koneksi.php";
                                $sqt = mysqli_query($conn, 'select * from trans where id_trans="'.$qur['id_trans'].'" ');
                                $qut = mysqli_fetch_array($sqt);
                                ?>
                                    <input type="text" name="seat" id="phone" value="<?=$qut['seat'];?>">
                            </div><br>

                            <div class="input-field">
                                <b><h5><i class="fas fa-plane-departure mr-3"></i>Berangkat Tanggal</h5></b>
                                <input type="date" name="depart" value="<?=$qur['depart'];?>" readonly>
                            </div><br>

                            <div class="input-field">
                                <b><h5><i class="fas fa-dollar-sign mr-3"></i><label for="h">Harga Tiket</label></h5></b>
                                <input type="number" name="price" id="h" readonly value="<?=$qur['price'];?>" readonly>
                            </div><br>

                            <div class="input-field">
                                <b><h5><i class="fas fa-user mr-3"></i><label for="iu">ID User</label></h5></b>
                                <?php
                                include "koneksi.php";
                                $squ = mysqli_query($conn, 'select * from user where username="'.$_SESSION['user'].'" ');
                                $quu = mysqli_fetch_array($squ);
                                ?>
                                    <input type="text" name="id_user" id="iu" readonly value="<?=$quu['id_user'];?>">
                            </div><br>


                            <div class="input-field">
                                <b><h5><i class="fas fa-road mr-3"></i><label for="ir">ID Rute</label></h5></b>
                                <input type="text" name="id_rute" id="ir" value="<?=$qur['id_rute'];?>" readonly>
                            </div><br>

                                 <div class="input-field">
                                <b><h5><i class="fas fa-file-alt mr-3"></i><label for="status">Status</label></h5></b>
                                <input type="text" name="status" id="status" readonly value="Proses" class="disabled">
                            </div><br>

                        <select name="description" class="form-control" required>
                            <option selected disabled>Pilih : </option><br>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM trans ");
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?php echo $row['id_trans_type']?>"><?php echo $row['description']?></option>
                            <?php }?>
                        </select><br>    

                      
                            <button class="btn btn-primary"> Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
