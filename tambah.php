<?php
include_once("config/koneksi.php");
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/login.php');
	exit;
}

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

<body style="position: fixed;">
<div class="all" style="
filter: blur(10x);
-webkit-filter: blur(10px);">
    <div class="navbar">
        <div class="container">
            <form action="post">
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
            <span class="logo">
                <h3><i class="bi bi-activity"></i>RS Global</h3>
            </span>
            <div class="nav">
                <a href="index.php"><i class="bi bi-house-door-fill"></i> Beranda</a>
                <a href="inventaris.php" style="opacity: 1;"><i class="bi bi-backpack-fill" style="color: #713bdb;"></i>Inventaris</a>
                <a href="log.php"><i class="bi bi-book-fill"></i> Log</a>
                <a href="pengaturan.php"><i class="bi bi-gear-fill"></i> Pengaturan</a>
            </div>
        </div>
    </div>
</div>

<form action='tambah.php' method="post" class="editform">
    <h3 style="margin:0;">Tambah Data</h3>
    <label>Nama</label><a href="inventaris.php" style="float:right;"><i class="bi bi-x-lg"></i></a><br>
    <input type="text" name="nama"><br>
    <label>Merk</label><br>
    <input type="text" name="merk"><br>
    <label>Kondisi</label><br>
    <input type="text" name="kondisi"><br>
    <label>Jumlah</label><br>
    <input type="text" name="jumlah" ><br>
    <label>Jenis</label><br>
    <input type="text" name="jenis" ><br>
    <input type="submit" name="submit" value="TAMBAH">
</form>
<?php
date_default_timezone_set("Asia/Singapore");

$user = $_SESSION['name'];
$date = date('m/d/Y h:i:s a', time());

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $kondisi = $_POST['kondisi'];
    $jumlah = $_POST['jumlah'];
    $jenis = $_POST['jenis'];

    // buat audit log
    $type = "Create";
    $act = "Menambah data ".$nama;
    $insert = mysqli_query($koneksi, "INSERT INTO audit (date,user,type,action) VALUES ('$date','$user','$type','$act')");

    $result = mysqli_query($koneksi, "INSERT INTO barang (NAMA_BARANG,MERK_BARANG,JENIS_BARANG,KONDISI,JUMLAH) VALUES('$nama','$merk','$jenis','$kondisi','$jumlah')");
    header("location: inventaris.php");
}
?>
    <script src="src/script.js"></script>
</body>
</html>
