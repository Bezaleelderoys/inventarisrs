<?php
$id = $_GET['ID'];
session_start();
include_once("config/koneksi.php");

// penjelasan biar dayatt gak bingun di repo
date_default_timezone_set("Asia/Singapore"); //ngatur zona waktu 

$user = $_SESSION['name']; //ngatur username
$date = date('m/d/Y h:i:s a', time()); //ngambil waktu sekarang

$result = mysqli_query($koneksi, "DELETE FROM barang WHERE ID_BARANG=$id");
if($result){
    $type = "Delete"; // ngatur tipe aktivitas
    $act = "Menghapus data dengan ID ".$id; // pesan aktivitas di log 
    $insert = mysqli_query($koneksi, "INSERT INTO audit (date,user,type,action) VALUES ('$date','$user','$type','$act')");
    header("Location: inventaris.php");

    //audit masihbasic wkwk
}
?>