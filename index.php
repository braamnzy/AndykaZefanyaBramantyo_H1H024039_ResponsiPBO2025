<?php
//index.php by Zefanya
require 'pokemon.php';
session_start();

if (isset($_GET['reset'])) {
    session_destroy();
    if(file_exists('riwayat.json')) unlink('riwayat.json');
    header("Location: index.php");
    exit;
}

if(isset($_POST['nama'])) {
    $nama = strtolower($_POST['nama']);

    if($nama === 'squirtle') {
        $_SESSION['pokemon'] = new Squirtle();
    } elseif($nama === 'chalizard') {
        $_SESSION['pokemon'] = new Chalizard();
    } else {
        $_SESSION['pokemon'] = null;
    }
}

$pokemon = isset($_SESSION['pokemon']) ? $_SESSION['pokemon'] : null;

function percent($value) {
    return min(100, ($value / 10000) * 100);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pokemon Training</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="indexbody">

<div class="container">
    <div class="box info-box">

        <h2>Pilih Pokémon</h2>

        <form method="POST" action="">
            <select name="nama">
                <option value="squirtle">Squirtle</option>
                <option value="chalizard">Chalizard</option>
            </select>
            <button type="submit">Buat Pokémon</button>
        </form>

        <h2 style="text-align : center;">Informasi Pokémon</h2>

        <div class="info-flex">
            <img src="<?= $pokemon->getImage()?>" alt="PokéCare" class="pokemon-image">

            <div class="info-text">
                <?php $pokemon->Informasi(); ?>
            </div>
        </div>

        <button onclick="location.href='latihan.php'" class="btn">Mulai Latihan</button>
    </div>


    <div class="box stats-box">

        <h2 style="text-align: center">Statistik Pokémon</h2>

        <p><strong>Strength:</strong> <?= $pokemon->getStrength(); ?></p>

            <div class="progress">
                <div class="progress-bar" style="width: <?= percent($pokemon->getStrength()) ?>%"></div>
            </div>

        <p><strong>Speed:</strong> <?= $pokemon->getSpeed(); ?></p>

            <div class="progress">
                <div class="progress-bar" style="width: <?= percent($pokemon->getSpeed()) ?>%"></div>
            </div>

        <p><strong>Durability:</strong> <?= $pokemon->getDurability(); ?></p>

            <div class="progress">
                <div class="progress-bar" style="width: <?= percent($pokemon->getDurability()) ?>%"></div>
            </div>

        <button onclick="location.href='riwayat.php'" class="btn">Riwayat Latihan</button>
        <button onclick="location.href='index.php?reset=1'" class="btn">Reset Pokémon</button>


    </div>

</div>
</body>
</html>