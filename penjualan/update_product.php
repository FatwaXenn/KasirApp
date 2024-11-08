<?php
session_start();
include "../config.php";

if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $sqlp = "SELECT * FROM produk WHERE kode_produk='$code'";
    $resp = mysqli_query($koneksi, $sqlp);
    $data = mysqli_fetch_array($resp);

    $response = [
        'code' => $data['kode_produk'],
        'name' => $data['nama_produk'],
        'price' => $data['harga'],
        'formatted_price' => number_format($data['harga'], 0, ",", ".")
    ];

    echo json_encode($response);
}
?>
