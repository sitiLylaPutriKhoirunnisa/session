<?php

$database = new PDO ("mysql:host=localhost;dbname=smkmutu","root","");


$query =$database->query("insert into siswa values (4,'Khoirunnisa','')");

 
while ($data=$query->fetch()){
    echo $data['nama'];
}

