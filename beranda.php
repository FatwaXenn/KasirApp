<?php 
session_start(); 
if(!isset($_SESSION["admin"])){
include "config.php";
}
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>MIXUE</title> 
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-icons/bootstrap.icons">
<link rel="stylesheet" href="font">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<script src="path/to/dist/feather.js"></script>
<style>
   @font-face {
      font-family: 'NTR-Regular';
      src: url('font/NTR-Regular.ttf');
   }
	 h1{ 
   text-align: center; 
   width: 100%;
   background: #E72929;
   margin-bottom: 15px; 
   padding-top: 15px;
   color: white;
   padding-bottom: 10px;
   font-family: "NTR-Regular", sans-serif;
   font-size: 80px;
   font-weight: 400;
   font-style: normal;
   
}
.logo img {
	width: 70px;
	float: left;
	margin: -2px 5px;
}
.menu { 
   background: white; 
   padding: 15px; 
   margin-bottom: 15px;
} 
   .menu a{ 
   margin: 10px 20px; 
   width: 120px;
   height: 40px;
   font-size: 22px;
   text-decoration: none; 
   color: white;
   font-family: "NTR-Regular", sans-serif;
   font-weight: 400;
   font-style: normal;
} 
   .menu a:hover{
    background: #B8001F;
    color: white;
} 
  P {
    background: white;
    padding: 10px;
    padding-left: 35px;
    font-size: 20px;
    margin-bottom: 15px;
  }
   p a {
    color: white;
} 
   iframe {
    background: white;
    margin-bottom: 15px;
} 
   footer { 
   bottom: 0; 
   font-size: 20px; 
   text-align: center; 
   padding-top: 7px; 
   background: white;
   font-family: "Merriweather Sans", sans-serif;
} 
   footer:hover {
    background: #c6edcf;
} 
   footer:hover span {
    color: red;
} 
   footer:hover .t {
    color: purple;
}
.btn {
  background: #E72929;
  font-size: 14px;
}

</style>
</head> 
<body> 
<h1><span class="logo"><img src="img/logo.png"></span>MIXUE</h1> 
<div class="menu">
    <center>
<a href="penjualan/index.php" target="frame" class="btn btn-sm ">Penjualan</a>

<?php if($_SESSION['level']=="admin"){ ?>
<a href="produk/index.php" target="frame" class="btn btn-sm ">Produk</a>
<a href="pelanggan/index.php" target="frame" class="btn btn-sm ">Pelanggan</a> 
<a href="petugas/index.php" target="frame" class="btn btn-sm ">Petugas</a>
<a href="report/index.php" target="frame" class="btn btn-sm ">Laporan</a>
<?php }else{ ?> 
   <a href="produk_kasir/index.php" target="frame" class="btn btn-sm ">Produk</a>
<?php } ?> 

<a href="login.php" class="btn btn-sm ">Logout</a> 
</center>
</div> 
<iframe name="frame" frameborder="0" width="100%" height="500px"></iframe> 
<footer> 
<span>Copyright</span> &copy KELOMPOK 2, <span 
class="t">2024</span>. 
</footer> 
</body> 
</html>