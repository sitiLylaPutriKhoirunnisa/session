<?php
 session_start();


 $username = $_POST['username'];
 $password = $_POST['password'];


$koneksi = new PDO('mysql:host=localhost;dbname=rumahsakit','root','');
$query = $koneksi->query('SELECT * from user where  username="$username" AND password="$password" ');


if($query->rowCount() > 0){
   
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
 
}else
{
    header("location:berandalogin.php");
}