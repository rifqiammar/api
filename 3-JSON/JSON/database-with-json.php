<?php

// Mengubah data base menjadi Json

$dbh = new PDO('mysql:host=localhost;dbname=kopi', 'root', '');
$db = $dbh->prepare('SELECT * FROM produk');
$db->execute();

$kopi = $db->fetchAll(PDO::FETCH_ASSOC);



$data = json_encode($kopi);
echo $data;