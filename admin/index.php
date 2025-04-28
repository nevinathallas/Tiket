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


         <div class="col-md-10">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="slide/admin.png" class="d-block w-100 h-10" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
          
        </div>
        <div class="carousel-item">
          <img src="slide/2.gif" class="d-block w-100 h-30" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
          <div class="carousel-item">
            <img src="slide/3.gif" class="d-block w-100 h-40" alt="...">
            <div class="carousel-caption d-none d-md-block">              
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
