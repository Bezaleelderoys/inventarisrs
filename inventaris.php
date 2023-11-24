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

<body>
    <div class="navbar">
        <div class="container">
            <form action="post">
                <i class="bi bi-search"></i><input type="text" name="" id="" placeholder="Cari...">
            </form>
            <div class="social">
                <a href="#"><i class="bi bi-bell-fill" id="bell"></i></a>
                <img src="img/profile.jpg" alt="">
                <a href="#"><?php echo $_SESSION['name'] ;?> <i class="bi bi-chevron-down"></i></a>
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
                <a href="audit.php"><i class="bi bi-book-fill"></i> Audit</a>
                <a href="pengaturan.php"><i class="bi bi-gear-fill"></i> Pengaturan</a>
                <a href="login/logout.php"><i class="bi bi-box-arrow-left"></i> Log Out</a>
            </div>
        </div>
    </div>
    <div class="inventory">
        <div class="upper-con">
            <form action="" method="post" name="form">
                <input type="text" placeholder="Cari."name="keyword">
                <button type="submit" name="cari">Cari!</button>
            </form>
            <a href="tambah.php"><button>Tambah</button></a>
        </div>
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>MERK</th>
                    <th>JENIS</th>
                    <th>JUMLAH</th>
                    <th>KONDISI</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
                if(isset($_POST['cari'])){
                    $cari = $_POST['keyword'];
                    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE NAMA_BARANG LIKE '$cari%'");
                }else{
                    $query = mysqli_query($koneksi, "SELECT * FROM barang");
                }
                ?>
                <?php
                while ($data = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['ID_BARANG'] . "</td>";
                    echo "<td>" . $data['NAMA_BARANG'] . "</td>";
                    echo "<td>" . $data['MERK_BARANG'] . "</td>";
                    echo "<td>" . $data['JENIS_BARANG'] . "</td>";
                    echo "<td>" . $data['JUMLAH'] . "</td>";
                    echo "<td>" . $data['KONDISI'] . "</td>";
                    echo "<td class='button'><a href='delete.php?ID=$data[ID_BARANG]'><button class='del'>Delete</button></a></td>";
                    echo "<td class='button'><a href='edit.php?ID=$data[ID_BARANG]'><button class='edit'>Edit</button></a></td>";
                }
                ?>
            </table>
        </div>
    </div>
    <script src="src/script.js"></script>
</body>

</html>