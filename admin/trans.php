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
                        <h3><i class="fas fa-plane mr-2" style="color: #FF1493"></i>Maskapai</h3> <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr  class="bg-info text-center">
                                <td>Code</td>
                                <td>Description</td>
                                <td>Seat</td>
                                <td>Trans Type</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="white-text">
                            <?php include "koneksi.php";
                            $sql = mysqli_query($conn, 'select trans.*, type_trans.description as desc_type from trans join type_trans on trans.id_trans_type = type_trans.id_trans_type;');
                            while($dtt = mysqli_fetch_array($sql) ) {
                            ?>
                            <tr>
                                <td>
                                    <?=$dtt['code'];?>
                                </td>
                                <td>
                                    <?=$dtt['description'];?>
                                </td>
                                <td>
                                    <?=$dtt['seat'];?>
                                </td>
                                <td>
                                    <?=$dtt['desc_type'];?>
                                </td>
                                <td>
                                    <a href="trans_d.php?id_trans=<?=$dtt['id_trans'];?>" onclick="return confirm('Sure, want to delete?');"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                    <a href="trans_u.php?id_trans=<?=$dtt['id_trans'];?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s10"><br>
              <div class="card-panel white-text blue">
                    <h3><i class="fas fa-plus mr-2" style="color: #FF1493"></i>Pilih Maskapai</h3> <br>
                    <form method="post" action="trans_t.php">
                        <div class="form-group">
                            <label for="code">Code</label>
                            <?php
                                $rang = range(1, 9);
                                shuffle($rang);
                                $c = implode($rang);
                                $code = $c;
                            ?>
                                <input type="text" name="codec" id="code" value="<?=$code;?>" class="btn disabled">
                         
                        </div>
                        <b><label for="desc">Description</label></b>
                        <div class="form-group">
                            <input class="form-control" type="text" name="description" id="desc" required>
                        
                        </div>
                        <b><label for="seat">Seat</label></b>
                        <div class="form-group">
                            <?php $r = range(1, 2); shuffle($r); $b = implode($r); $seat = $b;?>
                            <input class="form-control" type="text" name="seatc" id="seat" value="<?=$seat;?>">
                        
                        </div>
                        <b><label>Pilih Type</label></b><br>
                        <div class="form-group">
                        <select name="id_trans_type" class="form-control">
                            <option selected disabled>Type: </option>
                                <?php
                                include 'koneksi.php';
                                $result = mysqli_query($conn, "SELECT * FROM type_trans ");
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?php echo $row['id_trans_type']?>"><?php echo $row['description']?></option>
                            <?php }?>
                        </select><br>
                        <button class="btn btn-primary"></i>Tambah</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i class="ion-close"></i></button></a>
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
