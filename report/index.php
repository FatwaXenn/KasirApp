<?php  
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
?>
<meta http-equiv="refresh" content="0;url=../login.php">
<?php 
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body>

<br><br><br>
<main class="container border py-2 mt-2">
    <div class="row">
        <div class="col">
            <div class="border p-3 my-3 text-light rounded" style="background: #E72929;">
                <h4>Laporan Harian</h4>
                <form class="d-flex" method="POST" action="">
                    <input class="form-control me-2" type="date" name="tgl" required value="<?= date('Y-m-d') ?>">
                    <input list="nama_petugas" id="np" name="np" autocomplete="off" placeholder="Nama Petugas (Opsional)" class="form-control me-2" />
                    <datalist id="nama_petugas">
                        <?php  
                        include "../config.php";
                        $sqlp = "SELECT * FROM petugas";
                        $resp = mysqli_query($koneksi, $sqlp);
                        while($dtp = mysqli_fetch_array($resp)) {
                        ?>
                        <option value="<?= $dtp['nama_petugas'] ?>"><?= $dtp['nama_petugas'] ?></option>
                        <?php
                        }
                        ?>
                    </datalist>
                    <button class="btn btn-light" type="submit">Tampilkan</button>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="border p-3 my-3 text-light rounded" style="background: #E72929;">
                <h4>Laporan Bulanan</h4>
                <form class="d-flex" method="POST" action="">
                    <input class="form-control me-2" type="month" name="tgl" required value="<?= date('Y-m') ?>">
                    <input list="nama_petugas" id="np" name="np" autocomplete="off" placeholder="Nama Petugas (Opsional)" class="form-control me-2" />
                    <datalist id="nama_petugas">
                        <?php  
                        include "../config.php";
                        $sqlp = "SELECT * FROM petugas";
                        $resp = mysqli_query($koneksi, $sqlp);
                        while($dtp = mysqli_fetch_array($resp)) {
                        ?>
                        <option value="<?= $dtp['nama_petugas'] ?>"><?= $dtp['nama_petugas'] ?></option>
                        <?php
                        }
                        ?>
                    </datalist>
                    <button class="btn btn-light" type="submit">Tampilkan</button>
                </form>
            </div>
        </div>
    </div>

<!-- pencarian -->
    <div class="row">
        <?php  
        if(isset($_POST['tgl'])){
            $np = $_POST['np']; // The staff member's name (optional)
            $tgl = $_POST['tgl']; // The selected date or month
            
            $tg = substr($tgl, 8, 2);
            $bl = substr($tgl, 5, 2);
            $th = substr($tgl, 0, 4);
            $bul = number_format($bl);
            $bln = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            
            // Display daily or monthly based on $tg
            if($tg == ""){
                $tanggal = "Bulan " . $bln[$bul] . " " . $th;
            } else {
                $tanggal = "Tanggal " . $tg . " " . $bln[$bul] . " " . $th;
            }
        } else {
            $tanggal = "";
            $np = "";
        }
        ?>
        <div class="col-sm-8"><h5>Laporan Penjualan <?= $tanggal ?></h5></div>
        <?php 
        if($np != "") {
        ?>
        <div class="col-sm-4 text-end"><h5>Nama Petugas : <?= $np ?></h5></div>
        <?php
        }
        ?>
    </div>

<!-- akhir pencarian -->

<table class="table table-hover table-striped table-sm">
    <thead class="text-white" style="background: #E72929;">
        <tr>
            <th class="py-2 px-3 rounded-start" width="55px">No.</th>
            <th class="py-2" width="100px">Tanggal</th>
            <th class="py-2" width="100px">Kode</th>
            <th class="py-2">Nama Produk</th>
            <th class="py-2 text-end" width="100px">Harga</th>
            <th class="py-2 px-3 text-end" width="100px">Jumlah</th>
            <th class="py-2 px-3 text-end" width="100px">Total</th>
            <th class="py-2 text-start rounded-end" width="200px">Nama Petugas</th>
        </tr>
    </thead>
    <tbody>
        <?php  
        include "../config.php";
        if(isset($_POST['tgl'])){
            $tgl = $_POST['tgl'];
            $np = $_POST['np'];
            
            // SQL query, show all petugas if no name is provided
            $sql = "SELECT penjualan.tanggal, penjualan.id_petugas, penjualan.nama_petugas, detail_penjualan.kode_produk, detail_penjualan.nama_produk, detail_penjualan.harga, detail_penjualan.jumlah, detail_penjualan.harga * detail_penjualan.jumlah as tot 
                    FROM detail_penjualan, penjualan 
                    WHERE penjualan.penjualan_id = detail_penjualan.penjualan_id 
                    AND penjualan.tanggal LIKE '$tgl%' ";
            
            // Only add petugas condition if a specific name is chosen
            if(!empty($np)) {
                $sql .= "AND penjualan.nama_petugas = '$np' ";  // Exact match for petugas name
            }
            
            $result = mysqli_query($koneksi, $sql);
            $no = 1;
            $jmltot = 0;
            while($data = mysqli_fetch_array($result)){
                $hp = number_format($data['harga'], 0, ",", ".");
                $jp = number_format($data['jumlah'], 0, ",", ".");
                $total = $data['harga'] * $data['jumlah'];
                $tot = number_format($total, 0, ",", ".");
        ?>
        <tr>
            <td class="px-3"><?= $no ?>.</td>
            <td><?= substr($data['tanggal'], 0, 10) ?></td>
            <td><?= $data['kode_produk'] ?></td>
            <td><?= $data['nama_produk'] ?></td>
            <td align="right"><?= $hp ?></td>
            <td align="right" class="px-3"><?= $jp ?></td>
            <td align="right" class="px-3"><?= $tot ?></td>
            <td><?= $data['nama_petugas'] ?></td>
        </tr>
        <?php  
                $no++;
                $jmltot += $total;
                $jmltotal = number_format($jmltot, 0, ",", ".");
            }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td colspan="5" class="text-start py-2">
                <b>Total :</b>
            </td>
            <td class="text-end px-3">
                <b><?= !empty($jmltotal) ? $jmltotal : '0' ?></b>
            </td>
            <td></td>
        </tr>
    </tfoot>
</table>
<a href="reportprint.php?np=<?= $np ?>&tgl=<?= $tgl ?>" target="blank" class="btn btn-primary">Cetak Laporan</a>
<br>
<?php } ?>
</main>

<br><br>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>
