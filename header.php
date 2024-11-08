<style>
.logo img {
	width: 60px;
	float: left;
	margin: -10px 5px;
}
.menu { 
   background: white; 
   padding: 15px; 
   margin-bottom: 15px;
} 
   .menu a{ 
   margin-right: 20px; 
   margin-left: 20px; 
   text-decoration: none; 
   color: #0a0a0a;
   font-family: "Delius", cursive;
} 
   .menu a:hover{
    text-decoration: underline;
} 
   p { 
   background: white; 
   padding: 10px; 
   padding-left: 35px; 
   font-size: 20px; 
   margin-bottom: 15px;
}
  P {
    background: white;
    padding: 10px;
    padding-left: 35px;
    font-size: 20px;
    margin-bottom: 15px;
  }
   p a {
    color: #A81E1E;
} 
   iframe {
    background: white;
    margin-bottom: 15px;
} 

</style>
<header class="logo" >
<a href="#"><h2>Toko 48</h2></a>
	  <div class="menu"> 
<a href="../penjualan" target="frame" class="btn btn-sm ">Penjualan</a>  
<?php if($_SESSION['level']=="admin"){ ?>
<a href="../produk" target="frame" class="btn btn-sm ">Produk</a>
<a href="../pelanggan" target="frame" class="btn btn-sm ">Pelanggan</a> 
<a href="../petugas" target="frame" class="btn btn-sm ">Petugas</a>
<a href="../report" target="frame" class="btn btn-sm ">Laporan</a>    
<?php } ?> 
<a href="../logout.php" target="frame" class="btn btn-sm ">Logout</a> 
</div> 
<iframe name="frame" frameborder="0" width="100%" height="100%"></iframe> 
</header>