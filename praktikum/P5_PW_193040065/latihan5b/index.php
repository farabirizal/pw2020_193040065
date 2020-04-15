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
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>gambar</th>
        <th>jenis</th>
        <th>merk</th>
        <th>price</th>
    </tr>
    <?php $i = 1 ?>
<?php foreach ($pakaian as $pk) : ?>
    <tr>
        <td><?= $i ?></td>
        <td><img src="assets/img/<?= $pk["gambar"]; ?>  "width="100"></td>
        <td><?= $pk["jenis"]; ?></td>
        <td><?= $pk["merk"]; ?></td>
        <td><?= $pk["price"]; ?></td>
    </tr>
    <?php $i++ ?>
<?php endforeach; ?> 
    </table>
    </div>
</body>
</html>