<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:form_login.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="halaman_user.php">Halaman User</a><br />
<a href="hapus_login.php">Logout</a>