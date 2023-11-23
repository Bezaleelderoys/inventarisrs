<?php
$id = $_GET['ID'];

include_once("koneksi.php");

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $kondisi = $_POST['kondisi'];
    $jumlah = $_POST['jumlah'];
    $result = mysqli_query($koneksi, "UPDATE barang SET NAMA_BARANG='$nama', MERK_BARANG='$merk', KONDISI='$kondisi', JUMLAH='$jumlah' WHERE ID_BARANG=$id");

    header("location: index.php");
}
 
?>

<?php

$result = mysqli_query($koneksi, "SELECT * FROM barang WHERE ID_BARANG=$id");

while ($data_siswa = mysqli_fetch_array($result)) {
    $nama = $data_siswa['NAMA_BARANG'];
    $merk = $data_siswa['MERK_BARANG'];
    $jenis = $data_siswa['JENIS_BARANG'];
    $kondisi = $data_siswa['KONDISI'];
    $jumlah = $data_siswa['JUMLAH'];
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

<body style="
position: fixed;
">
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
    <div class="inventory">
        <div class="upper-con">
            <form action="" method="post" name="form">
                <input type="text" placeholder="Cari."name="keyword">
                <button type="submit" name="cari" style="
                    height: 2rem;
                    border: none;
                    outline: none;
                    box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.3);
                    border-radius: 3px;
                    cursor: pointer;
                ">Cari!</button>
            </form>
            <a href="edit.php">Tambah</a>
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
                    echo "<td class='button'><a href='delete.php'><button class='del'>Delete</button></a></td>";
                    echo "<td class='button'><a href='edit.php?ID=$data[ID_BARANG]'><button class='edit'>Edit</button></a></td>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

<form action='' method="post" class="editform">
    <label>Nama</label><a href="inventaris.php" style="float:right;"><i class="bi bi-x-lg"></i></a><br>
    <input type="text" name="nama" value="<?php echo $nama;?>"><br>
    <label>Merk</label><br>
    <input type="text" name="merk" value="<?php echo $merk;?>"><br>
    <label>Kondisi</label><br>
    <input type="text" name="kondisi" value="<?php echo $kondisi;?>"><br>
    <label>Jumlah</label><br>
    <input type="text" name="jumlah" value="<?php echo $jumlah;?>"><br>
    <label>Jenis</label><br>
    <input type="text" name="jenis" value="<?php echo $jenis;?>"><br>
    <input type="hidden" name="id" value="<?php echo $_GET['ID']; ?>">
    <input type="submit" name="update" value="UPDATE">
</form>
</body>
</html>
