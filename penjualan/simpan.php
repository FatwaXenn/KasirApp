<?php  
session_start();
if(isset($_POST['save'])){
	$kp=$_POST['kp'];
	$jp=$_POST['jp'];
	$penid=$_SESSION['penid'];
	// $halaman=$_GET['halaman'];
	include "../config.php";
	$sqlpr="select * from produk where kode_produk='$kp'";
	$respr=mysqli_query($koneksi,$sqlpr);
	$data=mysqli_fetch_array($respr);
	$stokawal=$data['stok'];
	$sqlst="select * from detail_penjualan where kode_produk='$kp'";
	$resst=mysqli_query($koneksi,$sqlst);
	$jmlst=0;
	while($dtst=mysqli_fetch_array($resst)){
		$jml=$dtst['jumlah'];
		$jmlst=$jmlst+$jml;
	}
	$sqltp="select * from tambah_stok where kode_produk='$kp'";
	$restp=mysqli_query($koneksi,$sqltp);
	$jmltp=0;
	while($dttp=mysqli_fetch_array($restp)){
		$jml=$dttp['jumlah'];
		$jmltp=$jmltp+$jml;
	}
	$stokakhir=$stokawal-$jmlst+$jmltp;
	$sp=number_format($stokakhir,0,",",".");
	if($jp>$stokakhir){
		echo "<script>alert('Stok Produk tinggal $sp ! jumlah penjualan tidak boleh lebih dari $sp')</script>";
	}
	else if($jp<=0){
		echo "<script>alert('Jumlah Penjualan tidak boleh kurang dari 1')</script>";
	}
	else{

	// Query untuk mengambil detail produk berdasarkan kode_produk
$sql = "SELECT * FROM produk WHERE kode_produk='$kp'";
$result = mysqli_query($koneksi, $sql);
$dt = mysqli_fetch_array($result);

// Ambil nama produk dan harga
$np = $dt['nama_produk'];
$hp = $dt['harga'];

// Cek apakah data dengan kode_produk dan penjualan_id sudah ada di tabel detail_penjualan
$sql_check = "SELECT * FROM detail_penjualan WHERE kode_produk='$kp' AND penjualan_id='$penid'";
$result_check = mysqli_query($koneksi, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    // Jika data sudah ada, tambahkan jumlah barang secara otomatis
    $sql_update = "UPDATE detail_penjualan 
                   SET nama_produk='$np', harga='$hp', jumlah=jumlah + '$jp'
                   WHERE kode_produk='$kp' AND penjualan_id='$penid'";
    $update = mysqli_query($koneksi, $sql_update);
    
    if ($update) {
        echo "Data berhasil diupdate dan jumlah barang ditambahkan.";
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
} else {
    // Jika data belum ada, lakukan insert
    $sql_insert = "INSERT INTO detail_penjualan (kode_produk, nama_produk, harga, jumlah, penjualan_id)
                   VALUES ('$kp', '$np', '$hp', '$jp', '$penid')";
    $insert = mysqli_query($koneksi, $sql_insert);
    
    if ($insert) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

	}
}
?>
<meta http-equiv="refresh" content="0;url=transaksi.php">