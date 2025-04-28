<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top ">
      <div class="container">   
      <h2><i class="fas fa-stethoscope text-success mr-3 font-weight-bold"></i></h2>
      <a class="navbar-brand font-weight-bold"  >Tiketin.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            
            <?php if (isset($_SESSION["pelanggan"])): ?>
              <li class="nav-item ">
              <!--<a class="nav-link" href="riwayat.php">Riwayat </a>-->
              <a class="nav-link" href="logout.php">Logout</a></li>
            
            <?php else: ?>
              <li class="nav-item ">
              <a class="nav-link" href="login.php">Login</a></li>
              
              
            <?php endif ?>
                
          </ul>

          <div class="icon mt-20 pt-2 ml-4">
            <h4>           
              <a href="keranjang.php" class="fas fa-cart-plus ml-5 mr-3 text-dark" data-toogle="tooltip" title="Keranjang Belanja" ></a>
              
              <a href="riwayat.php" class="fas fa-history text-dark" data-toogle="tooltip" title="History"></a>

              <a href="../admin/index.php" class="fas fa-user text-dark ml-3" data-toogle="tooltip" title="Admin"></a>


            </h4> 
          </div>
        </div>
        </div>
      </nav>