<?php
 $db = new PDO('mysql:host=localhost;dbname=smkmutu','root','');
 $query = $db->query('select * from siswa');
 
 while ($data = $query->fetch() ) :?>
    <p>
        <a href="proseshapus.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
    </p>
    
<?php endwhile ?>