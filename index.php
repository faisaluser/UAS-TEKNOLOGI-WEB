<html>
<head>
	<title>XeroSource</title>
<link rel="stylesheet" type="text/css" href="global.css" />
<meta name="viewport" content="width=device-width,initial-scale 1.0,user-scalebe=0" />
<script src="script/jquery-1.11.1.min.js"></script>
<script src="script/general.js"></script>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="#">Xero<span>Source</span></a></div>
	</div>
		<nav>
		<a class="active" href="#">Menu</a>
		<a href="#">News</a>
		<a href="#">Blog</a>
		<a href="#">About</a>
		<a href="#">Home</a>
		<input type="text" placeholder="Search...">
		</nav>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
   				<li><a href="tberita.html">Dashboard</a></li>
   				<li><a href="grafik.html">Grafik</a></li>
   				<li><a href="tinformasi.html">Informasi</a></li>
   				<li><a href="linformasi.html">Atur Informasi</a></li>
			</ul>
		</div>
		<div class="content">
			<style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
 <body style="font-family:arial">
 <center><h2>Aplikasi CRUD Sederhana </h2></center>
 <hr />
 <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id_barang;?>">Edit</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
		</div>
	</div>
</body>
</html>