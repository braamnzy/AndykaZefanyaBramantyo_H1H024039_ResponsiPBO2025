<?php
//latihan.php by Zefanya
require "Squirtle.php";
session_start();


if (!isset($_SESSION['pokemon'])) {
    $_SESSION['pokemon'] = new Squirtle();
}
$pokemon = $_SESSION['pokemon'];

$hasil = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $jenis = $_POST['jenis'];
    $intensitas = $_POST['intensitas'];
    $hasil = $pokemon->pelatihan($jenis, $intensitas);
    $_SESSION['pokemon'] = $pokemon;
    if ($hasil !== null) {
        $filename = 'riwayat.json';
        $fileData = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];
        $fileData[] = $hasil;
        file_put_contents($filename, json_encode($fileData, JSON_PRETTY_PRINT));
    }
}

function percent($value) {
    return min(100, ($value / 10000) * 100);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pokemon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="latihanbody">

    <div class="box train-box">

    <?php if ($hasil === null): ?>

        <h2 style="text-align:center;">Mulai Latihan Pokémon</h2>

        <form action="latihan.php" method="POST">
            <label>Pilih Jenis Latihan:</label><br>
            <select name="jenis" required>
                <option value="strength">Strength</option>
                <option value="speed">Speed</option>
                <option value="durability">Durability</option>
            </select>

            <br><br>

            <label>Intensitas Latihan (1–100 %):</label><br>
            <input type="range" name="intensitas" min="1" max="100" value="50"
                   oninput="this.nextElementSibling.value = this.value">
            <output>50</output>%

            <br><br>

            <button type="submit" class="btn">Mulai Latihan</button>
        </form>

        <button onclick="location.href='index.php'" class="btn">Kembali</button>

    <?php else: ?>

        <h2 style="text-align: center;">Hasil Latihan Pokémon</h2>

        <p><strong>Jenis Latihan:</strong> <?= $hasil['jenis'] ?></p>
        <p><strong>Intensitas:</strong> <?= $hasil['intensitas'] ?></p>

        <h3>Sebelum Latihan</h3>
        <p>Level: <?= $hasil['before']['level'] ?></p>
        <p>HP: <?= $hasil['before']['HP'] ?></p>

        <h3>Setelah Latihan</h3>
        <p>Level: <?= $hasil['after']['level'] ?></p>
        <p>HP: <?= $hasil['after']['HP'] ?></p>

        <h3>Special Move</h3>
        <p>Squirtle dapat membuat arus deras yang melahap lawannya!</p>

        <p><strong>Waktu Latihan:</strong> <?= $hasil['waktu'] ?></p>

        <h3 style="margin-top:20px;">Statistik Pokémon Terbaru</h3>

        <p><strong>Strength:</strong> <?= $pokemon->getStrength(); ?></p>
        <div class="progress">
            <div class="progress-fill" style="width: <?= percent($pokemon->getStrength()) ?>%"></div>
        </div>

        <p><strong>Speed:</strong> <?= $pokemon->getSpeed(); ?></p>
        <div class="progress">
            <div class="progress-fill" style="width: <?= percent($pokemon->getSpeed()) ?>%"></div>
        </div>

        <p><strong>Durability:</strong> <?= $pokemon->getDurability(); ?></p>
        <div class="progress">
            <div class="progress-fill" style="width: <?= percent($pokemon->getDurability()) ?>%"></div>
        </div>

        <hr>

        <button onclick="location.href='index.php'" class="btn">Kembali ke Beranda</button>
        <button onclick="location.href='latihan.php'" class="btn">Latihan lagi</button>
        <button onclick="location.href='riwayat.php'" class="btn">Riwayat Latihan</button>

    <?php endif; ?>
    </div>
</body>
</html>