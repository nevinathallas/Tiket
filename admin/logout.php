<?php
    session_start();
    session_destroy();

echo "<script>window.alert('Anda Telah Logout'); window.location.href='index.php';</script>";
?>
