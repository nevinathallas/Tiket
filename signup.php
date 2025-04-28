<html>

<head>
    <title>Tiketin | Penyedia Tiket Pesawat</title>
    <link rel="shortcut icon" href="image/LOGO.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <style>
        .b {
            background-size: cover;
        }

    </style>
</head>

<body style="background: url(image/1.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:700px; margin-top: -35px;">
        <center>
            <div style="padding-top: 125px;"><br>
                <a href="index.php" onclick="window.close();">
                    <img src="jpg/LOGO.png" class="img-responsive" style="width: 100px; height: 100px;">
                </a><br>
               <font face="Segoe Script" size="4">Daftar Dahulu Untuk Memesan Tiket</p></font>
                <div class="container" style="width: 500px;">
                    <form method="post" action="signup_p.php">
                        <div class="input-field">
                            <input type="text" name="username" id="user">
                            <label for="user">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="fullname" id="full">
                            <label for="full">Fullname</label>
                        </div>
                        <a href="signup_p.php" style="font-family: segoe ui light;"><button class="btn waves-effect blue">Daftar  <i class="ion-android-person-add"></i></button></a>
                    </form>
                     <p class="text-center">Belum punya akun? <a href="signup.php" style="font-family: segoe ui light;" class="text-center">Sign Up</a></p>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
