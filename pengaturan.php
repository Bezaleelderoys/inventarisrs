<?php
include_once("config/koneksi.php");
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/login.php');
	exit;
}


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
<style>
    #darkMode{
        background-color: white;
        border: 1px solid rgba(0,0,0,0.2);
        width: 100px; 
        height: 20px;     
    }
</style>
<body>
    <div class="navbar">
        <div class="container">
            <form action="">
                <i class="bi bi-search"></i><input type="text" name="" id="" placeholder="Cari...">
            </form>
            <div class="social">
                <a href="#"><i class="bi bi-bell-fill" id="bell"></i></a>
                <img src="img/profile.jpg" alt="">
                <a href="#"> <?php echo $_SESSION['name'] ;?> <i class="bi bi-chevron-down"></i></a>
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
                <a href="inventaris.php"><i class="bi bi-backpack-fill"></i> Inventaris</a>
                <a href="audit.php"><i class="bi bi-book-fill"></i> Audit</a>
                <a href="pengaturan.php" style="opacity: 1;"><i class="bi bi-gear-fill" style="color: #713bdb;"></i> Pengaturan</a>
                <a href="login/logout.php"><i class="bi bi-box-arrow-left"></i> Log Out</a>
            </div>
        </div>
    </div>
    <div class="setting">
        <div class="container">
            <h1>Pengaturan</h1>
            <h2 style="margin: 0;">Dark Mode</h2>
            <small>Mengaktifkan mode gelap pada halaman web. Klik tombol kembali untuk mengembalikan ke mode terang.</small><br> 
            <button id="darkMode">Aktifkan</button>
        </div>
    </div>    
    <script src="src/script.js"></script>
</body>
</html>