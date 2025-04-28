<html>

<head>
    <title>Tiketin.com | Admin Login</title>
    <link rel="icon" href="../jpg/LOGO.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <style>
        .b {
            background-size: cover;
        }

    </style>
</head>

<body style="background: url(../jpg/Slide/slide1.gif); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.25); width: 100%; height:700px; margin-top: -35px;">
        <center>
            <div style="padding-top: 175px;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <!--<img src="../image/LOGO.png" width="80" height="80">-->
                <p style="font-family: lobster; font-size: 21px;">Tiketin.com |<b> Admin Mode</b></p>
                <div class="container" style="width: 500px;">
                    <form method="post" action="p_login.php">
                        <div class="input-field">
                            <input type="text" name="username" id="user">
                            <label for="user">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <a href="signin_p.php" style="font-family: segoe ui light;"><button class="btn waves-effect" style="background-color: #2C3E50;">Sign In  <i class="ion-log-in"></i></button></a>
                    </form>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
