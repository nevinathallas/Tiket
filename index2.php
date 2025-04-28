<?php
session_start();
//koneksi ke database
include 'koneksi2.php';
require_once 'TranportIndex.php';

try {
    $apiBaseUrl = 'http://127.0.0.1:8000/admin/api-docs'; // atau ambil dari config
    $transportService = new TranportIndex($apiBaseUrl);

    $transports = $transportService->getTransports();
    print_r($transports);

    $types = $transportService->getTransportTypes();
    print_r($types);

    $routes = $transportService->getRoutes();
    print_r($routes);

    $schedules = $transportService->getSchedules();
    print_r($schedules);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

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

     
      <div class="col-md-13">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="jpg/1.jpg" class="d-block w-100 h-10" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>

        <div class="carousel-item">
            <img src="jpg/2.jpg" class="d-block w-100 h-40" alt="...">
            <div class="carousel-caption d-none d-md-block">              
        </div>
         
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
      </div><br>

   

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <img src="jpg/title2.jpg" weight="100" height="80">
            <!--<h1><b><font face="French Script MT" size="20" color="#FA8072" >Destinasi Terbaik</b></h1></font>-->
          </div>
        </div>
      

      <div class="row mx-auto">
        <div class="col-md-3 ">
          <div class="card mr-2 ml-2" style="width: 14rem;">
            <img src="jpg/bajo.jpg" width="630" height="150" class="card-img-top" alt="...">
            <div class="card-body">
              <b><font face="Segoe Script" size="5"><p class="card-text">Labuan Bajo</b></font>
               <div class="ml- mb-1">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
                <i class="far fa-star text-warning"></i><br>
                </div>
              <font >Labuan Bajo merupakan salah satu desa dari 19 desa dan kelurahan yang berada di kecamatan Komodo, Kabupaten Manggarai Barat</font>
            </div>
          </div>
        </div>

        <div class="col-md-3 " >
          <div class="card mr-2 ml-2"style="width: 14rem;" >
            <img src="jpg/komodo.jpg"   width="630" height="150"  class="card-img-top" alt="...">
            <div class="card-body">
             <b><font face="Segoe Script" size="5"><p class="card-text">Pantai Pink</b></font>
              <div class="ml- mb-1">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i><br>
                </div>
             <font>Pantai ini Terletak Di Pulau Komodo adalah sebuah pulau yang terletak di Kepulauan Nusa Tenggara,di sebelah timur Pulau Sumbawa</font>
            </div>
          </div>
        </div>

         <div class="col-md-3">
          <div class="card mr-2 ml-2" width="630" height="150" style="width: 14rem;">
            <img src="jpg/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <b><font face="Segoe Script" size="5"><p class="card-text">Raja Ampat</b></font>
                <div class="ml- mb-1">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
                <i class="far fa-star text-warning"></i><br>
                </div>
              <font>Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat Papua bagian timur Indonesia</font>    
            </div>
          </div>
         </div>

        <div class="col-md-3">
          <div class="card mr-2 ml-2" style="width: 14rem;">
            <img src="jpg/bali.jpg" width="630" height="150" class="card-img-top" alt="...">
            <div class="card-body">
             <b><font face=" Segoe Script" size="5"><p class="card-text">Bali</b></font>
              <div class="ml- mb-1">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i><br>
                </div>
             <font>Bali adalah sebuah pulau di Indonesia yang dikenal karena memiliki pantai,pegununggan dan terumbu karang yang cantik.</font>
            </div>
          </div>
         </div>

    </section><br>

      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 d-flex">
            <img src="image/3.jpg" weight="450" height="350" class="ml-5 mt-5">
          </div>

          <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <b><font face="Segoe Script" size="6"><h2 class="mb-4">Jadikan pengalaman terbaik anda dengan Tiketin.com</h2></font></b>
                <p>   Raja Ampat merupakan bagian dari Propinsi Papua Barat. Untuk mencapai pulau ini, kita harus menginjakkan kaki di kota Sorong terlebih dahulu. Biasanya para wisatawan banyak menggunakan penerbangan untuk sampai ke kota ini.</p>
                <p> Setelah sampai kota Sorong, kita dapat menggunakan sejenis kapal cepat yang biasa berlayar dua kali sehari menuju Waisai, ibukota kabupaten Raja Ampat. Perjalanan hanya akan memakan waktu sekitar 2-3 jam saja dari pelabuhan Sorong, hingga sampai di pelabuhan Waisai Raja Ampat.</p>
              </div>
            </div>
        
            </div>
          </div>
        </div><br>


    <div class="container">
      <div class="card mb-3">
        <img src="jpg/slide/slide2.gif" class="card-img-top" alt="...">
        <div class="card-body">
         <b><font face="Segoe Script" size="5"><p class="card-text">Enjoy Your Trip With us </b></font>
          <b><font face="Bradley Hand ITC" size="4" ><p class="card-text">Tiketin.com akan mengajak anda mengelilingi indonesia sesuai destinasi yang anda inginkan</p> </p></font>
          <div class="container text-center mt-4">
            <a href="tranportIndex.php" class="btn btn-success">Lihat Transportasi</a>
          </div>
        </div>
      </div>
    </div><br> 

    <div class="container">
     <img src="jpg/ferdindra.jpg" weight="100" height="80"><br>

    <img src="image/maskapai.png" weight="350" height="240">
    </div><br>




  <footer class="bg-secondary text-white p-5">
    <div class="row">
      <div class="col-md-3">

        <h5>LAYANAN PELANGGAN</h5>

        <ul>

          <li>Pusat Bantuan</li>
          <li>Cara Pembelian</li>
          <li>Pengiriman</li>
        </ul>
      </div>
      <div class="col-md-3">
       <h5>METODE PEMBAYARAN</h5>
       <img src="image/payment_methods.png">
     </div>
        
        
    </div>

  </footer>
     
<div class="copyright text-center font-weight-bold bg-info p-1 ">
  <p>Developed by Tiketin<i class="far fa-copyright"></i>2021</p>
  
</div>     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>