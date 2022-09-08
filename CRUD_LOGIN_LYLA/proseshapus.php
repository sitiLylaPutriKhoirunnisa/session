<?php

$id =$_GET['id'];
//koneksi
$db = new PDO("mysql:host=localhost;dbname=smkmutu","root","");
//query
$query = $db->query("DELETE FROM siswa where id='$id'");

header('location:select.php');

