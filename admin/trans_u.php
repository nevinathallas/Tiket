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
                    <h3><i class="fas fa-edit" style="color: #FF1493"></i> Edit Maskapai</h3>
                    <?php include "koneksi.php";
                    $id = $_GET['id_trans'];
                    $sql = mysqli_query($conn, 'select * from trans where id_trans="'.$id.'" ');
                    $dtt = mysqli_fetch_array($sql);
                    ?>
                    <div class="form-group">
                    <form method="post" action="trans_uu.php?id_trans=<?=$dtt['id_trans'];?>">
                        <b><label for="code">Code</label></b><br>
                         
                                <input  class="form-control"  type="text" name="codec" id="code" value="<?= $dtt['code'] ?>" class="btn disabled">
                                
                        </div>
                        <b><label for="desc">Description</label></b><br>
                        <div class="form-group">
                            <input  class="form-control"  type="text" name="description" id="desc" value="<?=$dtt['description'];?>" required>
                            
                        </div>
                        <b><label for="seat">Seat</label></b><br>
                        <div class="form-group">
                            <input  class="form-control"  type="text" name="seatc" id="seat" value="<?= $dtt['seat'] ?>" class="btn disabled">
                            
                        </div>
                        <b><label>Pilih Tipe </label></b><br>
                        <div class="form-group">
                        <select name="id_trans_type"  class="form-control" >
                            <option selected disabled>Type: </option>
                            <?php
                                include 'koneksi.php';
                                $result = mysqli_query($conn, "SELECT * FROM type_trans ");
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?= $row['id_trans_type'] ?>" <?= $row['id_trans_type'] == $dtt['id_trans_type'] ? 'selected' : '' ?>><?php echo $row['description']?></option>
                            <?php }?>
                        </select><br>
                        <button class="btn btn-primary"></i>Edit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
     </body>
</body>

</html>
