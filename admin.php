<?php
    require 'connect.php';
    $result = query("SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urusan Admin</title>
</head>
<body>  
    <h1>Daftar Karyawan</h1>
    <a href="index.php">Tambah data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["address"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["position"]; ?></td>
            <td><?= $row["status"]; ?></td>
            <td>
            <a href="delete.php?id=<?= $row["id"]; ?>"" class="button">Hapus</a>
            </td>
            <?php $i++; ?>
        </tr>
        <?php endforeach; ?>
</body>
</html>