<?php
if (!isset($_GET ['id'])) {
    header ("location: index.php");
    exit;
}

require 'functions.php';

$id = $_GET ['id'];

$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="gambar">
    <img src="assets/img/<?= $pakaian["img"]; ?>" alt="">
    
    <div class ="keterangan">
    <p><?= $pakaian["gambar"]; ?></p>
    <p><?= $pakaian["jenis"]; ?></p>
    <p><?= $pakaian["merk"]; ?></p>
    <p><?= $pakaian["price"]; ?></p>
    </div>
    </div>

    <button class="tombol-kembali"><a href ="../index.php">Kembali</a></button>
    </div>
</body>
</html>