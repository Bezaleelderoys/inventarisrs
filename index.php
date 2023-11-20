<?php
    include_once("koneksi.php");

    $query = mysqli_query($koneksi, "SELECT * FROM barang LIMIT 6");

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
                <div class="social">
                    <a href="#"><i class="bi bi-bell-fill" id="bell"></i></a>
                    <img src="img/profile.jpg" alt="">
                    <a href="#"> Admin <i class="bi bi-chevron-down"></i></a>
                </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="container">
            <span class="logo"><h2><i class="bi bi-activity"></i>RS Global</h2></span>
            <div class="nav">
                <a href="#" style="opacity: 1;"><i class="bi bi-house-door-fill" style="color: #713bdb;"></i> Beranda</a>
                <a href="inventaris.php"><i class="bi bi-backpack-fill"></i> Inventaris</a>
                <a href="log.php"><i class="bi bi-book-fill"></i> Log</a>
                <a href="pengaturan.php"><i class="bi bi-gear-fill"></i> Pengaturan</a>
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
                <table border="0" style="border-collapse: collapse;">
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Merk Barang</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                    </tr>
                    <?php   

                        while ($data = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>".$data['ID_BARANG']."</td>";  
                            echo "<td>".$data['NAMA_BARANG']."</td>";  
                            echo "<td>".$data['MERK_BARANG']."</td>";  
                            echo "<td>".$data['JENIS_BARANG']."</td>";  
                            echo "<td>".$data['JUMLAH']."</td>";  
                        }
                    ?>
                </table>
        </div>
    </div>
</body>
</html>
