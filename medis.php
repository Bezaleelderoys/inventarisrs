<?php
    include_once("koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Global</title>
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="container">
            <span class="logo"><h2><i class="bi bi-activity"></i>RS Global</h2></span>
            <div class="nav">
                <a href="index.php"><i class="bi bi-house"></i> Beranda</a>
                <a href="inventaris.php"><i class="bi bi-backpack4"></i> Inventaris</a>
                <a href="medis.php" style="background-color: blue; color:white;"><i class="bi bi-heart-pulse"></i> Medis</a>
                <a href="nonmedis.php"><i class="bi bi-motherboard"></i> Non Medis</a>
                <a href="log.php"><i class="bi bi-journal-medical"></i> Log</a>
                <a href="pengaturan.php"><i class="bi bi-gear"></i> Pengaturan</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <form>
                <input type="text" name="search" placeholder="Search...">
                <button type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
