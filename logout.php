<?php
session_start();
session_destroy();
header('location:index.php');
echo "<script>alert('selamat anda berhasil logout')</script>";
?>
