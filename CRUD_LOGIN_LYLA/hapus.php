<?php

$db = new PDO("mysql:host=localhost;dbname=smkmutu","root","");
$query = $db->query("DELETE from siswa where id = '5'");
