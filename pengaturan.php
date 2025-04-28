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
        <div class="row"><br><br>
            <div class="col s5">
                <div class="card-panel">
                    <h3>Data Anda</h3>
                    <div class="card green">
                        <?php
                        include "koneksi.php";
                        $sa = mysqli_query($conn, 'select * from customer where  username="'.$_SESSION['user'].'" ');
                        $da = mysqli_fetch_array($sa);
                        ?>
                            <div class="card-content">
                                <h5>Nama</h5>
                                <p class="white-text">
                                    <?=$da['name'];?>
                                </p>
                                <br/>
                                <h5>Alamat</h5>
                                <p class="white-text">
                                    <?=$da['address'];?>
                                </p>
                                <br/>
                                <h5>No.HP</h5>
                                <p class="white-text">
                                    <?=$da['phone'];?>
                                </p>
                                <h5>Jenis Kelamin</h5>
                                <p class="white-text">
                                    <?=$da['gender'];?>
                                </p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col s7">
                <div class="card-panel">
                    <h4>Silahkan isi data diri berikut ini</h4>
                    <?php
                        include "koneksi2.php";
                    $ss = mysqli_query($conn, 'select * from user where username="'.$_SESSION['user'].'" ');
                    $ds = mysqli_fetch_array($ss);
                    ?>
                        <form method="post" action="pengaturan_p.php">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input class="form-control" type="text" name="name" id="name" required value="<?=$ds['fullname'];?>">
                            </div>
                            <div class="form-group">
                                <label for="addr">Alamat</label>
                                <input class="form-control" type="text" name="address" id="addr" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">No HP</label>
                                <input class="form-control" type="text" name="phone" id="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control browser-default" name="gender" id="gender" required>
                                    <option selected disabled>Jenis Kelamin:</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input class="form-control" type="text" name="username" id="user" value="<?=$ds['username'];?>" required class="btn disabled">
                            </div>
                            <div class="form-group">
                            <?php
                                include "koneksi.php";
                                $cs = mysqli_query($conn, 'select * from customer where username="'.$_SESSION['user'].'" ');
                                $fu = mysqli_num_rows($cs);
                                    if($fu==0): 
                                ?>
                                    <button class="btn btn-primary" type="submit">submit</button>
                                <?php else: ?>
                                    <p>Tidak perlu input lagi</p>
                                <?php endif; ?>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
