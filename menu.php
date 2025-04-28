
<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top ">
      <div class="container">   

      <a class="navbar-brand font-weight-bold" href="index2.php">
        <img src="jpg/judul1.png"width="130" height="49">
      </a>

      <b><font face="Segoe Script" size="4">The best way to travel with us </font></b>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
              <h4 class="mr-3"><font face="Stencil"> <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a></font></h3>


            </li>

            
            <?php if (isset($_SESSION["user"])): ?>
              <!--<a class="nav-link" href="riwayat.php">Riwayat </a>-->
              <h4 class="mr-3"><font face="Stencil"><a class="nav-link" href="signout.php">Logout</a><span class="sr-only">(current)</span></a></font></h3>

              <form class="form-inline my-4 my-lg-0" action="cari.php" method="post" >
                <input class="form-control mr-sm-2"  type="text" placeholder="Cari Destinasi" aria-label="Search" name="cari" id="price">

                <button class="btn btn-success my-2 my-sm-0" type="submit">Cari</button>
              </form>
              <div class="icon mt-20 pt-2 ml-4">
            <h4>           
              

              <a href="../tiket/admin/index.php" class="fas fa-user text-dark ml-3" data-toogle="tooltip" title="Admin"></a>

              <a href="keranjang.php"  class="fas fa-cart-plus  text-dark ml-3" data-toogle="tooltip" title="Keranjang"></a>

            </h4> 
          </div>
            <?php else: ?>
              <li class="nav-item ">
              <h4 class="mr-4"><font face="Stencil"><a class="nav-link" href="signin.php">Login</a><span class="sr-only">(current)</span></a></font>
              
            <?php endif ?>
                
          </ul>

          
        </div>
        </div>
      </nav>