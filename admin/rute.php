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
            <div class="col s10"><br>
                <div class="card-panel white-text blue">
                    <h3><i class="fas fa-plane mr-2" style="color: #FF1493"></i>Rute</h3> <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr  class="bg-info text-center">

                                <td>Keberangkatan</td>
                                <td>Dari</td>
                                <td>Tujuan</td>
                                <td>Harga</td>
                                <td>ID </td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php include "koneksi.php";
                            $sql = mysqli_query($conn, 'select * from rute ');
                            while($dtt = mysqli_fetch_array($sql) ) {
                            ?>
                            <tr>
                                <td>
                                    <?=$dtt['depart'];?>
                                </td>
                                <td>
                                    <?=$dtt['rute_from'];?>
                                </td>
                                <td>
                                    <?=$dtt['rute_to'];?>
                                </td>
                                <td>
                                    <?=$dtt['price'];?>
                                </td>
                                <td>
                                    <?=$dtt['id_trans'];?>
                                </td>
                                <td>
                                    <a href="rute_d.php?id_rute=<?=$dtt['id_rute'];?>" onclick="return confirm('Sure, want to delete?');"><button class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button><br>
                                    <a href="rute_u.php?id_rute=<?=$dtt['id_rute'];?>"><button class="btn btn-warning"><i class="fas fa-edit"></i>        Edit</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s10"><br>
                <div class="card-panel">
                    <h3><i class="fas fa-Plus mr-2" style="color: #FF1493"></i> Add Rute</h3><br>

                    <form method="post" action="rute_t.php" >
                       <div class="form-group">
                            <p class="grey-text">Keberangkatan</p>
                            <input class="form-control" type="date" name="depart" id="depart" required>
                        </div>
                        <div class="form-group">
                            <label for="rutf">Kota Asal</label><br>
                            <input class="form-control" type="text" name="rute_from" id="rutf" required>
                        </div>
                        <div class="form-group">
                            <label for="rutt">Kota Tujuan</label><br>
                            <input class="form-control" type="text" name="rute_to" id="rutt" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga </label><br>
                            <input class="form-control" type="text" name="price" id="price" required>
                        </div>
                        <label>Maskapai</label><br>
                        <div class="form-group">
                        <select name="id_trans" class="form-control" required>
                            <option selected disabled>Pilih : </option><br>
                            <?php
                                include 'koneksi.php';
                                $result = mysqli_query($conn, "SELECT * FROM trans ");
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?php echo $row['id_trans']?>"><?php echo $row['description']?></option>
                            <?php }?>
                        </select><br>        
                    </div>
                    <button class="btn btn-primary" >Tambah Data</button>
                    </form><br>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-secondary text-white p-5">
        <div class="row">
          <div class="col-md-3">

          <h5>LAYANAN PELANGGAN</h5>

          <ul>

          <li>Pusat Bantuan</li>
          <li>Kebijakan Keamanan</li>
          <li>Refund</li>
        </ul>
      </div>
      <div class="col-md-3">
       <h5>METODE PEMBAYARAN</h5>
       <img src="slide/payment_methods.png">
     </div>
        
        
    </div>

  </footer>
     
<div class="copyright text-center font-weight-bold bg-info p-1 ">
  <p>Developed by Tiketin.com<i class="far fa-copyright"></i>2021</p>
  
</div>     

</body>

</html>
