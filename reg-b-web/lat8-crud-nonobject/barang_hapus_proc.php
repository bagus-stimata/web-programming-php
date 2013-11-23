<?php 
	//Ambil parameter dari page form yang menyertakannya
	// misal kita punya variable "  001" maka setelah di trim "001"
	$kode_barang = trim($_GET['kodebarang'], " ");
	/*
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
	*/
	include 'koneksi.php';
	$query = "DELETE FROM tb_produk WHERE pcode='".$kode_barang."'"; 
	mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
	
  	header('location:barang_list.php');
?>
