<?php
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
mysqli_select_db ($conn, "tubes_193040065") or die ("Database salah!");
$result = mysqli_query($conn, "SELECT * FROM pakaian");
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
<div class= "container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>gambar</th>
        <th>jenis</th>
        <th>merk</th>
        <th>price</th>
    </tr>
    <?php $i = 1 ?>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i ?></td>
        <td><img src="assets/img/<?= $row["gambar"]; ?>  "width="100"></td>
        <td><?= $row["jenis"]; ?></td>
        <td><?= $row["merk"]; ?></td>
        <td><?= $row["price"]; ?></td>
    </tr>
    <?php $i++ ?>
<?php endwhile; ?> 
    </table>
    </div>
</body>
</html>