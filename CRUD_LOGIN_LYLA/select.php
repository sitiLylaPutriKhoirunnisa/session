<?php

$db = new PDO("mysql:host=localhost;dbname=smkmutu","root","");
$query = $db->query("select * from siswa");

while ($data = $query->fetch()){
    echo "<p>".$data['nama']."</p>";
}
