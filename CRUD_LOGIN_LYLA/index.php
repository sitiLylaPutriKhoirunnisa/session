<?php
session_start();

if(!isset($_SESSION["username"])){
    header("location:form_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
 $db = new PDO("mysql:host=localhost;dbname=pbo12",'root','');
 $query = $db->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="proseshapus.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proseshapus.php?id=<?= $data['id']; ?>" class="btn btn-warning">
            Hapus
        </a>
    </p>
<?php endwhile ?>
        <a href="hapus_login.php">Logout</a>