<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:form.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="user.php">Halaman User</a><br />
<a href="hapus_session.php">Logout</a>