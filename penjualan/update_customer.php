<?php
session_start();
include "../config.php";

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sqlplg = "SELECT * FROM pelanggan WHERE id_pelanggan='$id'";
    $resplg = mysqli_query($koneksi, $sqlplg);
    $dtlg = mysqli_fetch_array($resplg);
    
    echo "Nama Pelanggan: " . $dtlg['nama_pelanggan'];
}
?>
