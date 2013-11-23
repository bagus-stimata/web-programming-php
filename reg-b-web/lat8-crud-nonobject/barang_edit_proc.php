<?php 
	//Ambil parameter dari page form yang menyertakannya
	$kode_barang = trim($_GET['teks_pcode'], " "); // misal kita punya variable "  001" maka setelah di trim "001"
	$nama_barang = $_GET['teks_pname'];
	$tipe_barang = $_GET['teks_tipe'];
	$hrg_jual = $_GET['teks_hrg_jual'];
	$hrg_beli = $_GET['teks_hrg_beli'];
	$stok = $_GET['teks_stok'];

	echo $kode_barang;
	echo $nama_barang;
	echo $tipe_barang;
	echo $hrg_beli;
	echo $hrg_jual;
	echo $stok;	
	
	include 'koneksi.php';
	$query = "UPDATE tb_produk SET pname='" . $nama_barang ."', 
		tipe='" .$tipe_barang. "', hrg_beli='".$hrg_beli."', hrg_jual='".$hrg_jual."', stok='".$hrg_jual."'
		WHERE pcode='".$kode_barang."'"; 
	mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
	
	//Buat meredirect ke barang_list.php
  	header('location:barang_list.php');
?>
