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
                        <h3><i class="fas fa-plane mr-2" style="color: #FF1493"></i>Daftar User</h3> <br>

                   <table class="table table-bordered">
                        <thead>
                             <tr  class="bg-info text-center">
                                <td>Username</td>
                                <td>Fullname</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="white-text">
                            <?php include "koneksi.php";
                            $sql = mysqli_query($conn, 'select * from user ');
                            while($dtt = mysqli_fetch_array($sql) ) {
                            ?>
                            <tr>
                                <td>
                                    <?=$dtt['username'];?>
                                </td>
                                <td>
                                    <?=$dtt['fullname'];?>
                                </td>
                                <td>
                                    <a href="user_d.php" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i class="ion-close"></i></button></a>
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
