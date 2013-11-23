<?php 
	//Ambil parameter dari page form yang menyertakannya
	$isEdit = trim($_GET['isEdit'], " ");
	$kode_barang = trim($_GET['teks_pcode'], " ");
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
	
	if ($isEdit==1) { //Edit Data
		$query = "UPDATE tb_produk SET pname='" . $nama_barang ."', 
			tipe='" .$tipe_barang. "', hrg_beli='".$hrg_beli."', hrg_jual='".$hrg_jual."', stok='".$hrg_jual."'
			WHERE pcode='".$kode_barang."'"; 		
	} else if ($isEdit==2){
		$query = "INSERT INTO tb_produk(pcode, pname, tipe, hrg_beli, hrg_jual, stok) 
			values('". $kode_barang . "', '". $nama_barang ."','". $tipe_barang ."',
			'". $hrg_beli ."','". $hrg_jual ."','". $stok ."')";
	} else if ($isEdit==3) {
		$query = "DELETE FROM tb_produk WHERE pcode='".$kode_barang."'"; 
		echo "Hapus<br>";
		echo $kode_barang;
	}
	
	mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
	
  	header('location:barang_list.php');
?>
