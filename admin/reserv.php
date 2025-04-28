<html>

<head>
    <title>Tiketin.com | Admin Mode</title>
    <link rel="icon" href="../jpg/logo.png">
    <!--<link rel="stylesheet" href="../css/materialize.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php include "session.php";?>

  <?php include "menu.php";?>

        <div class="row">
            <div class="col s8"><br>
                <div class="card-panel white-text blue">
                    <div class="card-panel white-text blue">
                    <h3><i class="fas fa-plane mr-2" style="color: #FF1493"></i>Format Tiket</h3> <br>
                    <table class="table table-bordered">
                       <thead>
                             <tr  class="bg-info text-center">
                                <td>Kode</td>
                                <td>Tgl Memesan</td>
                                <td>Tgl Berangkat</td>
                                <td>Kode Kursi</td>
                                <td>Tgl Tujuan</td>
                                <td>Harga</td>
                                <td>Pelanggan</td>
                                <td>Maskapai</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody class="white-text">
                            <?php include "koneksi2.php";
                            $sql = mysqli_query($conn, 'select reserv.*, trans.id_trans, trans.description as maskapai from reserv join rute on reserv.id_rute = rute.id_rute join trans on rute.id_trans = trans.id_trans;');
                            while($dtt = mysqli_fetch_array($sql) ) {
                            ?>
                            <tr class="text-center">
                                <td>
                                    <?=$dtt['reserv_code'];?>
                                </td>
                                <td>
                                    <?=$dtt['reserv_at'];?>
                                </td>
                                <td>
                                    <?=$dtt['reserv_date'];?>
                                </td>
                                <td>
                                    <?=$dtt['seat'];?>
                                </td>
                                <td>
                                    <?=$dtt['depart'];?>
                                </td>
                                <td>
                                    <?=$dtt['price'];?>
                                </td>
                                <td>
                                    <?php
                                include "koneksi.php";
                                $squ = mysqli_query($conn, 'select * from user where id_user="'.$dtt['id_user'].'" ');
                                while($quu = mysqli_fetch_array($squ)) {
                                ?>
                                    <b><?=$quu['username'];?></b>
                                    <?php } ?>
                                </td>
                                <td>
                                    <option value="<?php echo $dtt['id_trans']?>"><?php echo $dtt['maskapai']?></option>
                                </td>
                                <td>
                                    <?php 
                                    if($dtt['status']=='Proses') {
                                    ?>
                                    <a href="terima.php?id_reserv=<?=$dtt['id_reserv'];?>" onclick="return confirm('Sudah Melakukan Transaksi?');" class="white-text">
                                        <button class="btn btn-primary"><?=$dtt['status'];?></button>
                                    </a>
                                    <?php 
                                    } else {
                                        echo $dtt['status'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>

     


</body>

</html>
