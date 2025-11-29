<?php
//riwayat.php by Zefanya
session_start();

$filename = 'riwayat.json';
$riwayat = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Latihan Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="riwayatbody">
    <div class="container-riwayat">
        <h2>Riwayat Latihan Pokémon</h2>
        <?php if (empty($riwayat)) : ?>
            <p>Belum ada riwayat latihan.</p>
        <?php else : ?>
            <table border="1" cellpadding="8" class="table-riwayat">
                <thead>
                    <tr>
                        <th>Jenis Latihan</th>
                        <th>Intensitas</th>
                        <th>Level Sebelum</th>
                        <th>Level Sesudah</th>
                        <th>HP Sebelum</th>
                        <th>HP Sesudah</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($riwayat as $r): ?>
                        <tr>
                            <td><?= $r['jenis'] ?></td>
                            <td><?= $r['intensitas'] ?></td>
                            <td><?= $r['before']['level'] ?></td>
                            <td><?= $r['after']['level'] ?></td>
                            <td><?= $r['before']['HP'] ?></td>
                            <td><?= $r['after']['HP'] ?></td>
                            <td><?= $r['waktu'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <button onclick="location.href='index.php'" class="btn">Kembali ke Beranda</button>
    </div>


</body>
</html>
