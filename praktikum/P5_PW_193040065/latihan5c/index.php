<?php
require 'php/functions.php';
$pakaian = query ("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">
<head>
<h1>Butique Slurdude</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
</head>
<body>
<div class ="container">
<?php foreach ($pakaian as $pk) : ?>
    <p class = "gambar">
    <a href = "php/detail.php?id=<?= $pk ['id'] ?>">
    <?= $pk["jenis"] ?>
    </a>
    </p>
<?php endforeach; ?> 
    </div>
</body>
</html>