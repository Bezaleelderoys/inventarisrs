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
    <div class="navbar">
        <div class="container">
                <form action="">
                    <i class="bi bi-search"></i><input type="text" name="" id="" placeholder="Cari...">
                </form>
                <a href="#"><i class="bi bi-bell-fill" id="bell"></i></a>
                <img src="img/profile.jpg" alt="">
                <a href="#"> Admin <i class="bi bi-chevron-down"></i></a>
        </div>
    </div>
    <div class="sidebar">
        <div class="container">
            <span class="logo"><h2><i class="bi bi-activity"></i>RS Global</h2></span>
            <div class="nav">
                <a href="#" style="background-color: blue; color:white;"><i class="bi bi-house"></i> Beranda</a>
                <a href="inventaris.php"><i class="bi bi-backpack4"></i> Inventaris</a>
                <a href="medis.php"><i class="bi bi-heart-pulse"></i> Medis</a>
                <a href="nonmedis.php"><i class="bi bi-motherboard"></i> Non Medis</a>
                <a href="log.php"><i class="bi bi-journal-medical"></i> Log</a>
                <a href="pengaturan.php"><i class="bi bi-gear"></i> Pengaturan</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="icon">
                    <i class="bi bi-archive-fill"></i>
                </div>
                <div class="text-box">
                    <h2>2505</h2>
                    <p>Total Barang</p>
                </div>
            </div>
            <div class="card">
                <div class="icon1">
                    <i class="bi bi-archive-fill"></i>
                </div>
                <div class="text-box">
                    <h2>2505</h2>
                    <p>Total Barang</p>
                </div>
            </div>
            <div class="card">
                <div class="icon2">
                    <i class="bi bi-archive-fill"></i>
                </div>
                <div class="text-box">
                    <h2>2505</h2>
                    <p>Total Barang</p>
                </div>
            </div>
            <div class="card">
                <div class="icon3">
                    <i class="bi bi-archive-fill"></i>
                </div>
                <div class="text-box">
                    <h2>2505</h2>
                    <p>Total Barang</p>
                </div>
            </div>
        </div>
        <div class="big-card">
                <div class="title">
                    <p>Inventaris</p>
                    <a href="inventaris.php">Lihat lebih..</a>
                </div>
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
        </div>
    </div>
</body>
</html>
