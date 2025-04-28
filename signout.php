<?php
session_start();
session_destroy();
echo "<script>window.alert('Apakah Anda Yakin ingin Logout?');window.location.href='index2.php';</script>";
?>
