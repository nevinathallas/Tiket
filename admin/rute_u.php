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



            <div class="col s10"><br>
                <div class="card-panel">
                    <h3><i class="fas fa-edit" style="color: #FF1493"></i> Edit Rute</h3>
                    <?php include "koneksi.php";
                    $id = $_GET['id_rute'];
                    $sql = mysqli_query($conn, 'select * from rute where id_rute="'.$id.'" ');
                    $dtt = mysqli_fetch_array($sql);
                    ?>
                    <form method="post" action="rute_uu.php?id_rute=<?=$dtt['id_rute'];?>">
                        <div class="input-field">
                            <p class="grey-text">Depart At</p>
                            <input type="date" name="depart" id="depart" value="<?=$dtt['depart'];?>">
                        </div>
                        <div class="input-field">
                            <input type="text" name="rute_from" id="rutf" value="<?=$dtt['rute_from'];?>" required>
                            <label for="rutf">Rute From</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="rute_to" id="rutt" value="<?=$dtt['rute_to'];?>" required>
                            <label for="rutt">Rute To</label>
                        </div>
                        <div class="input-field">
                            <input type="number" name="price" id="price" value="<?=$dtt['price'];?>">
                            <label for="price">Price</label>
                        </div>
                        <select name="id_trans" class="browser-default">
                            <option selected disabled>Transportasi: </option>
                            <?php
                                include 'koneksi.php';
                                $result = mysqli_query($conn, "SELECT * FROM trans ");
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?php echo $row['id_trans']?>"><?php echo $row['description']?></option>
                            <?php }?>
                        </select>
                        <br>
                        <button class="btn btn-primary">Edit</button>
                    </form>
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
     
<div class="copyright text-center font-weight-bold bg-warning p-1 ">
  <p>Developed by Tiketin.com<i class="far fa-copyright"></i>2020</p>
  
</div>     

</body>

</html>
</body>


</html>
