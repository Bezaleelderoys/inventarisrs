<?php
$id = $_GET['ID'];

include_once("koneksi.php");

$result = mysqli_query($koneksi, "DELETE FROM barang WHERE ID_BARANG=$id");
if($result){
    header("Location: inventaris.php");
}
?>