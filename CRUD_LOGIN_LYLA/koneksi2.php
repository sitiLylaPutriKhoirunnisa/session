<?php

    $database = new PDO ("mysql:host=localhost;dbname=bkk","root","");
    $query =$database->query ("delete from perusahaan where nama='LYLA'");

    while($data = $query->fetch()){
        echo "<p>".$data["nama"]."</p>";

    }

