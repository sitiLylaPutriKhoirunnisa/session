<?php

$nama =$_GET['nama'];
$kelas =$_GET['kelas'];
$id =$_GET['id'];

$database = new PDO('mysql:host=localhost;dbname=smkmutu','root','');

$query = $database->query("UPDATE `siswa` SET `nama`='$nama',`kelas`='$kelas' WHERE `id`='$id'");

header('location:select.php');

