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
                    <h3><i class="fas fa-edit mr-2" style="color: #FF1493"></i>Edit Transportation Type</h3> <br>
                    <b><label for="desc">Description</label><br></b>
                    <?php include "koneksi.php";
                    $id = $_GET['id_trans_type'];
                    $sql = mysqli_query($conn, 'select * from type_trans where id_trans_type="'.$id.'" ');
                    $dtt = mysqli_fetch_array($sql);
                    ?>
                    <form method="post" action="type_trans_uu.php?id_trans_type=<?=$dtt['id_trans_type'];?>">
                        <div class="input-field">
                            <input type="text" name="description" id="desc" value="<?=$dtt['description'];?>" required>

                        </div>
                        <button class="btn btn-primary"></i>Edit</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <?php include "footer.php";?>
</body>

</html>
